@extends('admins.layouts.master')

@section('categories')
active
@endsection

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/pnotify/pnotify.custom.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/summernote/summernote-bs4.css') }}" />
@endsection

@section('admin')
<header class="page-header">
    <h2>Gallery</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li><span>Admin</span></li>
            <li><span>Gallery</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
    </div>
</header>
<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <form id="categoriesForm" class="form-horizontal" enctype="multipart/form-data">

            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 id="mainTitle" class="card-title">Add Gallery</h2>
                </header>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label id="nameTitle" class="control-label text-sm-right pt-2">Gallery Name <span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="nameNameError"></span>
                        </div>
                        <div class="col-sm-4">
                            <label id="gtypeTitle" class="control-label text-sm-right pt-2">Gallery Type <span class="required">*</span></label>
                            <input type="text" name="gtype" id="gtype" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="gtypeNameError"></span>
                        </div>
                        <div class="col-sm-4">
                            <label id="fileurlTitle" class="control-label text-sm-right pt-2">Gallery File url <span class="required">*</span></label>
                            <input type="text" name="fileurl" id="fileurl" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="fileurlNameError"></span>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label text-lg-right pt-2">Description <span class="required">*</span></label>
                            <textarea name="details" id="details" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                <p>Start typing...</p>
                            </textarea>
                            <span class="text-danger" id="detailsError"></span>
                        </div>
                        <div class="col-lg-12 pt-2">
                            <label class="control-label">Select Image</label>
                            <div class="col-lg-12 pl-0">
                                <div class="form-group">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fas fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Change</span>
                                                <span class="fileupload-new">Select file</span>
                                                <input class="image" name="timage[]" multiple id="timage" type="file" />
                                            </span>
                                            <a href="#" id="remove" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-right">
                            <input type="hidden" id="cId" value="0" />
                            <button id="addGallery" class="btn btn-primary">Add</button>
                            <button type="reset" id="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    <!-- end: page -->
</div>

<!-- Delete Model -->
<a id="modelBTN" class="mb-1 mt-1 mr-1 modal-basic btn btn-default d-none" href="#deleteModel">Basic</a>

<div id="deleteModel" class="modal-block mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Are you sure?</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <p class="mb-0">Are you sure !! you want to delete this Categories?</p>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger modal-delete" id="confirm">Yes! Delete</button>
                    <button class="btn btn-default modal-dismiss" id="cancel">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- End Delete Model -->
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result).addClass('d-block');
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $("#remove").click(function() {
            $('#showImage').attr('src', '').addClass('d-none');
        })
    });
</script>
<script src="{{ asset('admin/vendor/pnotify/pnotify.custom.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.notifications.js') }}"></script>
<script src="{{ asset('admin/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.validation.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.modals.js') }}"></script>
<script src="{{ asset('admin/custom/gallery.js') }}"></script>
<script src="{{ asset('admin/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
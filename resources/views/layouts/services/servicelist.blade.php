@extends('dashboard')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/pnotify/pnotify.custom.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/magnific-popup/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/summernote/summernote-bs4.css') }}" />
@endsection

@section('userdashboard')

@php
$categories = DB::table('categories')->latest()->get()
@endphp

<header class="page-header">
    <h2>Services List</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <!-- <a href="{{ route('user.advertisement') }}" class="card-action text-dark bg-light p-2">Add Advertisement</a> -->
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Services List</h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="servicesDataTable">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Title</th>
                            <th>Established</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Categories</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="servicesTable">

                    </tbody>
                </table>
            </div>
        </section>
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
                    <p class="mb-0">Are you sure !! you want to delete this Advertisement?</p>
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

<a id="editBTN" class="mb-1 mt-1 mr-1 modal-with-zoom-anim ws-normal modal-basic btn btn-default d-none" href="#editModel">Basic</a>

<div id="editModel" class="zoom-anim-dialog modal-block modal-block-full mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Edit Services
                <button type="button" class="close btn-default modal-dismiss" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </h2>
        </header>
        <div class="card-body" id="editProduct">
            <form enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label id="serviceTitle" class="control-label text-sm-right pt-2">Service Title <span class="required">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="titleError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="cateSubTitle" class="control-label text-sm-right pt-2">Service Categories </label>
                            <select name="cid" id="cid" data-plugin-selectTwo class="form-control populate">
                                <option value="" selected>Select Categories</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cname }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="cIDError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="establishedTitle" class="control-label text-sm-right pt-2">Established <span class="required">*</span></label>
                            <input type="text" name="established" id="established" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="establishedError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="emailTitle" class="control-label text-sm-right pt-2">Email <span class="required">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="emailError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="contact1Title" class="control-label text-sm-right pt-2">Contact 1 <span class="required">*</span></label>
                            <input type="text" name="contact1" id="contact1" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="contact1Error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="contact2Title" class="control-label text-sm-right pt-2">Contact 2 <span class="required">*</span></label>
                            <input type="text" name="contact2" id="contact2" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="contact2Error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="adder1Title" class="control-label text-sm-right pt-2">Address Line <span class="required">*</span></label>
                            <input type="text" name="adder1" id="adder1" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="adder1Error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="adder2Title" class="control-label text-sm-right pt-2">Address Line <span class="required">*</span></label>
                            <input type="text" name="adder2" id="adder2" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="adder2Error"></span>
                        </div>
                        <div class="col-sm-3">
                            <label id="cityTitle" class="control-label text-sm-right pt-2">City <span class="required">*</span></label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="cityError"></span>
                        </div>
                        <div class="col-sm-3">
                            <label id="pincodeTitle" class="control-label text-sm-right pt-2">Pincode <span class="required">*</span></label>
                            <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="pincodeError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="websiteTitle" class="control-label text-sm-right pt-2">Website <span class="required">*</span></label>
                            <input type="text" name="website" id="website" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="websiteError"></span>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <label class="control-label">Select Logo <span class="required">*</span></label>
                            <div class="row">
                                <div class="col-sm-10">
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
                                                    <input class="logo" name="logo" id="logo" type="file" />
                                                </span>
                                                <a href="#" id="logoRemove" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                        <span class="text-danger" id="logoError"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="" id="showLogo" width="70" src="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <label class="control-label">Photo</label>
                            <div class="row">
                                <div class="col-sm-10">
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
                                                    <input class="photo" name="photourl" id="photourl" type="file" />
                                                </span>
                                                <a href="#" id="photoRemove" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                        <span class="text-danger" id="photoError"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="" id="showPhoto" width="70" src="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label text-lg-right pt-2">Description <span class="required">*</span></label>
                            <textarea name="description" id="description" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                <p>Start typing...</p>
                            </textarea>
                            <span class="text-danger" id="descriptionError"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <input type="hidden" id="sID" />
                    <input type="hidden" id="oldLogo" />
                    <input type="hidden" id="oldPhoto" />
                    <button class="btn btn-danger modal-update" id="updateServices">Update</button>
                    <button class="btn btn-default modal-dismiss" id="cancel">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.logo').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showLogo').attr('src', e.target.result).addClass('d-block');
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $("#logoRemove").click(function() {
            $('#showLogo').attr('src', '').addClass('d-none');
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.photo').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showPhoto').attr('src', e.target.result).addClass('d-block');
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $("#photoRemove").click(function() {
            $('#showPhoto').attr('src', '').addClass('d-none');
        })
    });
</script>
<script src="{{ asset('admin/vendor/pnotify/pnotify.custom.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.notifications.js') }}"></script>
<script src="{{ asset('admin/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.modals.js') }}"></script>
<script src="{{ asset('admin/custom/services.js') }}"></script>
<script src="{{ asset('admin/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
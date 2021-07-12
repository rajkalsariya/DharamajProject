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
<header class="page-header">
    <h2>Job Post</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <form id="jobFindForm" class="form-horizontal" enctype="multipart/form-data">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 id="mainTitle" class="card-title">Add Job Post</h2>
                </header>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label id="titleTitle" class="control-label text-sm-right pt-2">Title <span class="required">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="titleError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="jobtypeTitle" class="control-label text-sm-right pt-2">Job Type <span class="required">*</span></label>
                            <input type="text" name="jobtype" id="jobtype" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="jobtypeError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="contactTitle" class="control-label text-sm-right pt-2">Contact No. <span class="required">*</span></label>
                            <input type="text" name="contactno" id="contactno" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="contactnoError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="emailTitle" class="control-label text-sm-right pt-2">Email <span class="required">*</span></label>
                            <input type="text" name="emailid" id="emailid" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="emailidError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="cityTitle" class="control-label text-sm-right pt-2">City <span class="required">*</span></label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="cityError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="countryTitle" class="control-label text-sm-right pt-2">Country <span class="required">*</span></label>
                            <input type="text" name="country" id="country" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="countryError"></span>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <label class="control-label">Photo <span class="required">*</span></label>
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
                                                    <input class="image" name="photo" id="photo" type="file" />
                                                </span>
                                                <a href="#" id="remove" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                        <span class="text-danger" id="photoError"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="" id="showImage" width="70" src="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label id="jpdtTitle" class="control-label text-sm-right pt-2">JPDT <span class="required">*</span></label>
                            <input type="text" name="jpdt" id="jpdt" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="jpdtError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-lg-right pt-2">Job Details <span class="required">*</span></label>
                            <textarea name="jobdetails" id="jobdetails" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                <p>Start typing...</p>
                            </textarea>
                            <span class="text-danger" id="jobdetailsError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-lg-right pt-2">Description <span class="required">*</span></label>
                            <textarea name="description" id="description" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                <p>Start typing...</p>
                            </textarea>
                            <span class="text-danger" id="descriptionError"></span>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-right">
                            <input type="hidden" id="jobPostId" value="0" />
                            <button id="addJobPost" class="btn btn-primary">Add</button>
                            <button type="reset" id="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div>

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
        $("#remove").click(function(){
            $('#showImage').attr('src', '').addClass('d-none');
        })
    });
</script>
<script src="{{ asset('admin/vendor/pnotify/pnotify.custom.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.notifications.js') }}"></script>
<script src="{{ asset('admin/vendor/select2/js/select2.js')}}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.modals.js') }}"></script>
<script src="{{ asset('admin/custom/jobpost.js') }}"></script>
<script src="{{ asset('admin/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
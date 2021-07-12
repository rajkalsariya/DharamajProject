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
    <h2>Advertisement List</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="{{ route('user.advertisement') }}" class="card-action text-dark bg-light p-2">Add Advertisement</a>
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>

                <h2 class="card-title">Advertisement List</h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="advertisementDataTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Categories</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Paid</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="categoriesTable">

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
            <h2 class="card-title">Edit Advertisement
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
                            <label id="advertisementTitle" class="control-label text-sm-right pt-2">Advertisement Title <span class="required">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="titleError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-lg-right pt-2">Select Date <span class="required">*</span></label>
                            <div class="input-daterange input-group" data-plugin-datepicker>
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </span>
                                <input type="text" id="startdate" class="form-control" name="startdate" required>
                                <span class="input-group-text border-left-0 border-right-0 rounded-0">
                                    to
                                </span>
                                <input type="text" id="enddate" class="form-control" name="enddate" required>
                            </div>
                            <span class="text-danger" id="startdateError"></span>
                            <span class="text-danger" id="enddateError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="cateSubTitle" class="control-label text-sm-right pt-2">Advertisement Categories </label>
                            <select name="cid" id="cid" data-plugin-selectTwo class="form-control populate">
                                <option value="" selected>Select Categories</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cname }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="cprentNameError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label id="cateTitle" class="control-label text-sm-right pt-2">Redirect Url <span class="required">*</span></label>
                            <input type="text" name="redirecturl" id="redirecturl" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="redirecturlError"></span>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <label class="control-label">Select Image</label>
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
                                                    <input class="image" name="imageurl" id="imageurl" type="file" />
                                                </span>
                                                <a href="#" id="remove" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="" id="showImage" width="70" src="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label id="advertisementTitle" class="control-label text-sm-right pt-2">Price </label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="priceError"></span>
                        </div>
                        <div class="col-sm-3">
                            <label id="advertisementTitle" class="control-label text-sm-right pt-2">Paid Mode </label>
                            <input type="text" name="paidmode" id="paidmode" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="paidmodeError"></span>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label text-lg-right pt-2">Summernote <span class="required">*</span></label>
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
                    <input type="hidden" id="aID" />
                    <input type="hidden" id="oldImg" />
                    <button class="btn btn-danger modal-update" id="updateAdvertisement">Update</button>
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
<script src="{{ asset('admin/custom/advertisement.js') }}"></script>
<script src="{{ asset('admin/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
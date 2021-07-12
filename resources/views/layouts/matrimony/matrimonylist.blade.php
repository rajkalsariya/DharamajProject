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
    <h2>Matrimony List</h2>
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

                <h2 class="card-title">Matrimony List</h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="matrimonyDataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Birthdate</th>
                            <th>Occupation</th>
                            <th>Address</th>
                            <th>Maritalstatus</th>
                            <th>Bio</th>
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
            <h2 class="card-title">Edit Matrimony
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
                            <label class="control-label text-sm-right pt-2">Full Name <span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Here..." required autocomplete="off" />
                            <span class="text-danger" id="nameError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-lg-right pt-2">Birthdate <span class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                </span>
                                <input type="text" name="bdt" id="bdt" data-plugin-datepicker data-plugin-options="{ 'multidate': false }" class="form-control">
                            </div>
                            <span class="text-danger" id="bdtError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-sm-right pt-2">Gender </label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="radio" class="sex" value="male" id="male" name="sex">
                                            </span>
                                        </span>
                                        <input disabled value="Male" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="radio" class="sex" value="female" id="female" name="sex">
                                            </span>
                                        </span>
                                        <input disabled value="Female" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger" id="sexError"></span>
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label text-sm-right pt-2">District <span class="required">*</span></label>
                            <input type="text" name="district" id="district" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="districtError"></span>
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label text-sm-right pt-2">State <span class="required">*</span></label>
                            <input type="text" name="state" id="state" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="stateError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-sm-right pt-2">Marital Status <span class="required">*</span></label>
                            <select name="maritalstatus" id="maritalstatus" class="form-control">
                                <option value="" selected>Select Marital Status</option>
                                <option value="unmarried">Unmarried</option>
                                <option value="married">Married</option>
                            </select>
                            <span class="text-danger" id="maritalstatusError"></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label text-sm-right pt-2">Occupation </label>
                            <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Enter Here..." autocomplete="off" />
                            <span class="text-danger" id="occupationError"></span>
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
                                                    <input class="photourl" name="photourl" id="photourl" type="file" />
                                                </span>
                                                <a href="#" id="removephotourl" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>                                        
                                        <span class="text-danger" id="photourlError"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="d-none" id="showphotourl" width="70" src="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <label class="control-label">Biodata</label>
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
                                                    <input class="biourl" name="biourl" id="biourl" type="file" />
                                                </span>
                                                <a href="#" id="removebiourl" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                        <span class="text-danger" id="biourlError"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img class="d-none" id="showbiourl" width="70" src="#">
                                </div>
                            </div>
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
<script src="{{ asset('admin/custom/matrimony.js') }}"></script>
<script src="{{ asset('admin/vendor/autosize/autosize.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
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
    <h2>Services</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <form id="advertisementForm" class="form-horizontal" enctype="multipart/form-data">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <!-- <a href="{{ route('user.advertisementlist') }}" class="card-action text-dark bg-light p-2">Advertisement List</a> -->
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 id="mainTitle" class="card-title">Add Services</h2>
                </header>
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
                                    <img class="d-none" id="showLogo" width="70" src="#">
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
                                    <img class="d-none" id="showPhoto" width="70" src="#">
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
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-right">
                            <input type="hidden" id="sId" value="0" />
                            <button id="addServices" class="btn btn-primary">Add</button>
                            <button type="reset" id="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div>
<!-- end: page -->
@endsection

@section('script')
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
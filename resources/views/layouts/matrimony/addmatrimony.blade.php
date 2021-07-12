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
    <h2>Matrimony</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <form id="matrimonyForm" class="form-horizontal" enctype="multipart/form-data">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <!-- <a href="{{ route('user.advertisementlist') }}" class="card-action text-dark bg-light p-2">Advertisement List</a> -->
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 id="mainTitle" class="card-title">Add Matrimony</h2>
                </header>
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
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-right">
                            <input type="hidden" id="matrimonyId" value="0" />
                            <button id="addMatrimony" class="btn btn-primary">Add</button>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.photourl').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showphotourl').attr('src', e.target.result).addClass('d-block');
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $("#removephotourl").click(function() {
            $('#showphotourl').attr('src', '').addClass('d-none');
        })

        $('.biourl').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showbiourl').attr('src', e.target.result).addClass('d-block');
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $("#removebiourl").click(function() {
            $('#showbiourl').attr('src', '').addClass('d-none');
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
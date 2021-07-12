@extends('admins.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/pnotify/pnotify.custom.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />

@endsection

@section('admin')

<button style="display: none;" id="Btnsuccess" class="mt-3 mb-3 btn btn-success">Success</button>

<header class="page-header">
    <h2>Admin Profile</h2>

    <div class="right-wrapper text-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li><span>Admin</span></li>
            <li><span>Profile</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
        <section class="card">
            <div class="card-body">
                <div class="thumb-info mb-3">
                    <img src="{{ (!empty($admin->photo))? url($admin->photo): url('upload/user_profile_image.png') }}" class="rounded img-fluid" alt="{{ $admin->name }}">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner">{{ $admin->name }}</span>
                        <span class="thumb-info-type">Admin</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-8 col-xl-9">
        <div class="tabs">
            <ul class="nav nav-tabs tabs-primary">
                <li class="nav-item active">
                    <a class="nav-link" href="#overview" data-toggle="tab">Overview</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="overview" class="tab-pane active">

                    <div class="p-3">

                        <form class="p-3" method="POST" action="{{ route('admin_profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="mb-3">Personal Information</h4>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" value="{{ $admin->name }}" class="form-control" id="inputName">
                            </div>
                            <div class="form-group">
                                <label for="inputMobile">Mobile No.</label>
                                <input type="text" name="mobile" value="{{ $admin->mobile }}" class="form-control" id="inputMobile">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" value="{{ $admin->email }}" class="form-control" id="inputEmail" placeholder="Apartment, studio, or floor">
                            </div>
                            <!-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div> -->

                            <div class="form-row">
                                <div class="col-md-12 text-right mt-3">
                                    <button type="submit" class="btn btn-primary modal-confirm">Save</button>
                                </div>
                            </div>

                        </form>

                        <hr class="dotted tall">

                        <form id="form" method="POST" action="{{ route('admin_password.update') }}" class="form-horizontal">
                            @csrf
                            <h4 class="mb-3">Change Password</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputOldPassword">Current Password</label>
                                    <input type="password" name="currentPassword" class="form-control" id="inputOldPassword" placeholder="Password" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNewPassword4">New Password</label>
                                    <input type="password" name="password" class="form-control" id="inputNewPassword4" placeholder="New Password" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputReNewPassword4">Confirm Password</label>
                                    <input type="password" name="reNewPassowrd" class="form-control" id="inputReNewPassword4" placeholder="Confirm Password" required />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 text-right mt-3">
                                    <button type="submit" class="btn btn-primary modal-confirm">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: page -->

@endsection

@section('script')


<!-- Theme Base, Components and Settings -->
<script src="{{ asset('admin/js/theme.js') }}"></script>

<script src="{{ asset('admin/vendor/pnotify/pnotify.custom.js') }}"></script>
@if(session('success'))
<script>
    $('#Btnsuccess').click(function() {
        new PNotify({
            title: 'Success',
            text: '{{ session("success") }}.',
            type: 'success',
            shadow: true
        });
    });
    $('#Btnsuccess').click();
</script>
@endif

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });
</script>

<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.validation.js') }}"></script>
@endsection
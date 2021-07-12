@extends('dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/pnotify/pnotify.custom.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
@endsection

@section('userdashboard')
<button style="display: none;" id="Btnsuccess" class="mt-3 mb-3 btn btn-success">Success</button>

<header class="page-header">
    <h2>User Profile</h2>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
        <section class="card">
            <div class="card-body">
                <div class="thumb-info mb-3">
                    <img src="{{ (!empty($user->photo))? url('upload/user_profile_image/'.$user->photo): url('upload/user_profile_image.png') }}"
                        class="rounded img-fluid" alt="{{ $user->name }}">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner">{{ $user->name }}</span>
                        <span class="thumb-info-type">User</span>
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

                        <form class="p-3" method="POST" action="{{ route('user_profile.update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <h4 class="mb-3">Personal Information</h4>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                    id="inputName" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                    id="inputEmail" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Change Profile Image</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fas fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Change</span>
                                            <span class="fileupload-new">Select file</span>
                                            <input name="photo" id="image" type="file" />
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists"
                                            data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <img id="showImage"
                                src="{{ (!empty($user->photo))? url('upload/user_profile_image/'.$user->photo): url('upload/user_profile_image.png') }}"
                                class="rounded img-fluid" width="100" alt="{{ $user->name }}">
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

                        <form id="form" method="POST" action="{{ route('user_password.update') }}"
                            class="form-horizontal">
                            @csrf
                            <h4 class="mb-3">Change Password</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputOldPassword">Current Password</label>
                                    <input type="password" name="currentPassword" class="form-control"
                                        id="inputOldPassword" placeholder="Password" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNewPassword4">New Password</label>
                                    <input type="password" name="password" class="form-control" id="inputNewPassword4"
                                        placeholder="New Password" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputReNewPassword5">Confirm Password</label>
                                    <input type="password" name="reNewPassowrd" class="form-control"
                                        id="inputReNewPassword5" placeholder="Confirm Password" required />
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

<script src="{{ asset('admin/pnotify/pnotify.custom.js') }}"></script>
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

<script src="{{ asset('admin/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/js/examples/examples.validation.js') }}"></script>

@endsection
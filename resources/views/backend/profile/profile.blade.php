@extends('backend.layout.master')
@section('title', 'Profile')
@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Settings</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Settings</h5>
                    </div>

                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account"
                            role="tab">
                            Account
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#password"
                            role="tab">
                            Password
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Privacy and safety
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Email notifications
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Web notifications
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Widgets
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Your data
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Delete account
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-xl-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Private info</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.profile.update',Auth::user()->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" id="inputFirstName"
                                                placeholder="Enter your name" value="{{Auth::user()->name}}"/>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4"
                                                placeholder="Enter your email" value="{{Auth::user()->email}}"/>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{Auth::user()->phone}}"/>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gender <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-control">
                                                <option selected disabled>Select gender</option>
                                                <option {{Auth::user()->gender=='male'?'selected':''}} value="male">Male</option>
                                                <option {{Auth::user()->gender=='female'?'selected':''}} value="female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Address</label>
                                            <textarea class="form-control" name="address">{{Auth::user()->address}}</textarea>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Profile image</label>
                                                <input type="file" onchange="loadFile(event)" name="profile_image" class="form-control-file">
                                            </div>
                                            <div class="preview">
                                                <label>Current Image</label>
                                                <img src=""
                                                    class="previewLogo" id="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Preview Image</label>
                                        <img class="preview-img" id="output" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Save changes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Password</h5>

                                <form>
                                    <div class="form-group">
                                        <label for="inputPasswordCurrent">Current password</label>
                                        <input type="password" class="form-control" id="inputPasswordCurrent" />
                                        <small><a href="#">Forgot your password?</a></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNew">New password</label>
                                        <input type="password" class="form-control" id="inputPasswordNew" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNew2">Verify password</label>
                                        <input type="password" class="form-control" id="inputPasswordNew2" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Save changes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endpush

@extends('Customer.Layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Rays Coding</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            {{-- Basic Details --}}
                            <div class="profile-content-container">
                                <div class="profile-content-header">
                                    <div class="profile-content">
                                        <h6>Basic Profile</h6>
                                        <a href="{{route('customer.dashboard')}}" class="backbuttonlink">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-content-container mt-4">
                                <div class="profile-content-body">
                                    <div class="profile-content">
                                        <form action="{{ route('customer.profiles.submit', ['id' => $customerRecord->id]) }}" method="post" enctype="multipart/form-data">
                                            @if (Session::has('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif

                                            @if (Session::has('error'))
                                                <div class="alert alert-danger">
                                                    {{ Session::get('error') }}
                                                </div>
                                            @endif
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{$customerRecord->name}}">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="name">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{$customerRecord->email}}">
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                                    <label for="name">Contact</label>
                                                    <input type="text" class="form-control" name="contact" id="contact" value="{{$customerRecord->contact}}">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="name">Date of Birth</label>
                                                    <input type="text" class="form-control" name="dob" id="mdate" value="{{$customerRecord->dob}}" data-dtp="dtp_ngM38">
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="submitBtn">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">File Upload</h4>
                        <form action="{{ route('customer.photo.submit', ['id' => $customerRecord->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="dropify-wrapper">
                                <div class="dropify-message">
                                    <span class="file-icon"></span>
                                    <p>Drag and drop a file here or click</p>
                                    <p class="dropify-error">Ooops, something wrong appended.</p>
                                </div>
                                <div class="dropify-loader"></div>
                                <div class="dropify-errors-container">
                                    <ul></ul>
                                </div>
                                <input type="file" id="input-file-now" class="dropify" name="profileimage">
                                <button type="button" class="dropify-clear">Remove</button>
                                <div class="dropify-preview">
                                    <span class="dropify-render"></span>
                                    <div class="dropify-infos">
                                        <div class="dropify-infos-inner">
                                            <p class="dropify-filename">
                                                <span class="file-icon"></span>
                                                <span class="dropify-filename-inner"></span>
                                            </p>
                                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <button type="submit" class="submitBtn">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card" style="height: 336px">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('Customer/profile/' . $customerRecord->profile) }}" alt="user" class="rounded-circle img-thumbnail mb-1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            {{-- Basic Details --}}
                            <div class="profile-content-container">
                                <div class="profile-content-header">
                                    <div class="profile-content">
                                        <h6>Password Update</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-content-container mt-4">
                                <div class="profile-content-body">
                                    <div class="profile-content">
                                        <form action="{{ route('customer.password.update', ['id' => $customerRecord->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="currentpassword">Current Password</label>
                                                    <input type="password" class="form-control @error('currentpassword') is-invalid @enderror" name="currentpassword" id="currentpassword">
                                                    @error('currentpassword')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                                    <label for="newpassword">New Password</label>
                                                    <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword" id="newpassword">
                                                    @error('newpassword')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="confirmpassword">Confirm password</label>
                                                    <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" name="confirmpassword" id="confirmpassword">
                                                    @error('confirmpassword')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="submitBtn">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

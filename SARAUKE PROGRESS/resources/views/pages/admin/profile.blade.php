@extends('layouts.admin')

{{-- @section('heading', 'Add Slide')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin_profile_submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="" class="img-fluid">
                            <input type="file" class="form-control mt_10" name="photo">
                        </div>
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email *</label>
                                <input type="text" class="form-control" name="email" value="{{ $item->email }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="retype_password">
                            </div>
                            <div class="mb-4">
                                <label class="form-label"></label>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

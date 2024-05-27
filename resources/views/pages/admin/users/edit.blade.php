@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin_users_update') }}" method="post" enctype="multipart/form-data">
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
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email *</label>
                                <input type="text" class="form-control" name="email1" value="{{ $item->email }}" disabled>
                                <input type="hidden" name="email" name="email" value="{{ $item->email }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Username *</label>
                                <input type="text" class="form-control" name="username" value="{{ $item->username }}">
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Roles *</label>
                                <select name="roles" id="" class="form-control">
                                    <option value="ADMIN" {{ $item->roles == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                    <option value="USER" {{ $item->roles == 'USER' ? 'selected' : '' }}>USER</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('roles') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="retype_password">
                                <span class="text-danger">{{ $errors->first('retype_password') }}</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"></label>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin_users') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

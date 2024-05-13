@extends('layouts.admin')

{{-- @section('heading', 'Setting') --}}


@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Setting</h1>
            {{-- <a href="{{ route('admin_slide_add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Slide
            </a> --}}
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin_setting_update', $setting_data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="about">About Page (Front End)</label>
                                        <textarea name="about" class="form-control">{{ $setting_data->about }}</textarea>
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
        </div>
    @endsection
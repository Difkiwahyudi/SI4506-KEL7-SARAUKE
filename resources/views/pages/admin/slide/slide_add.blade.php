@extends('layouts.admin')

{{-- @section('heading', 'Add Slide')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Slide</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin_slide_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Photo *</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Text</label>
                        <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ old('text') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button URL</label>
                        <input type="text" class="form-control" name="button_url" value="{{ old('button_url') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label"></label>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

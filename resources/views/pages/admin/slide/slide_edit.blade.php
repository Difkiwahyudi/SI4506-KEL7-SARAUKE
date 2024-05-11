@extends('layouts.admin')

{{-- @section('heading', 'Edit Slide')

@section('right_top_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection --}}

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Slide</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin_slide_update', $slide_data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Existing Photo</label>
                        <div>
                            <img src="{{ asset('uploads/' . $slide_data->photo) }}" alt="" class="w_200">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Change Photo</label>
                        <div>
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" value="{{ $slide_data->heading }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Text</label>
                        <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $slide_data->text }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control" name="button_text"
                            value="{{ $slide_data->button_text }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Button URL</label>
                        <input type="text" class="form-control" name="button_url" value="{{ $slide_data->button_url }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Logo</label>
                                                <div>
                                                    <img src="{{ asset('uploads/' . $setting_data->logo) }}" alt=""
                                                        class="w_200">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Change Logo</label>
                                                <div>
                                                    <input type="file" name="logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Existing Favicon</label>
                                                <div>
                                                    <img src="{{ asset('uploads/' . $setting_data->favicon) }}" alt=""
                                                        class="w_50">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Change Favicon</label>
                                                <div>
                                                    <input type="file" name="favicon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- hidden --}}

                                    {{-- <div class="mb-4">
                                        <label class="form-label">Top Bar Phone</label>
                                        <input type="text" class="form-control" name="top_bar_phone" value="{{ $setting_data->top_bar_phone }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Top Bar Email</label>
                                        <input type="text" class="form-control" name="top_bar_email" value="{{ $setting_data->top_bar_email }}">
                                    </div>


                                    <div class="mb-4">
                                        <label class="form-label">Home Feature Status</label>
                                        <select name="home_feature_status" class="form-control">
                                            <option value="Show" @if ($setting_data->home_feature_status == 'Show') selected @endif>Show</option>
                                            <option value="Hide" @if ($setting_data->home_feature_status == 'Hide') selected @endif>Hide</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Home Room Total</label>
                                        <input type="text" class="form-control" name="home_room_total" value="{{ $setting_data->home_room_total }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Home Room Status</label>
                                        <select name="home_room_status" class="form-control">
                                            <option value="Show" @if ($setting_data->home_room_status == 'Show') selected @endif>Show</option>
                                            <option value="Hide" @if ($setting_data->home_room_status == 'Hide') selected @endif>Hide</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Home Testimonial Status</label>
                                        <select name="home_testimonial_status" class="form-control">
                                            <option value="Show" @if ($setting_data->home_testimonial_status == 'Show') selected @endif>Show</option>
                                            <option value="Hide" @if ($setting_data->home_testimonial_status == 'Hide') selected @endif>Hide</option>
                                        </select>
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label">Home Latest Post Total</label>
                                        <input type="text" class="form-control" name="home_latest_post_total" value="{{ $setting_data->home_latest_post_total }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Home Latest Post Status</label>
                                        <select name="home_latest_post_status" class="form-control">
                                            <option value="Show" @if ($setting_data->home_latest_post_status == 'Show') selected @endif>Show</option>
                                            <option value="Hide" @if ($setting_data->home_latest_post_status == 'Hide') selected @endif>Hide</option>
                                        </select>
                                    </div> --}}

                                    {{-- hidden --}}

                                    


                                    <div class="mb-4">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ $setting_data->facebook }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Youtube</label>
                                        <input type="text" class="form-control" name="youtube"
                                            value="{{ $setting_data->youtube }}">
                                    </div>

                                    {{-- <div class="mb-4">
                                        <label class="form-label">Theme Color 1</label>
                                        <input type="text" class="form-control" name="theme_color_1"
                                            value="{{ $setting_data->theme_color_1 }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Theme Color 2</label>
                                        <input type="text" class="form-control" name="theme_color_2"
                                            value="{{ $setting_data->theme_color_2 }}">
                                    </div> --}}

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

@extends('layouts.app')
@section('title', 'Travel Journey SARAUKE')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Explore Travel Journey
                                </li>
                                <li class="breadcrumb-item active">
                                    Please Read Our Travel journey
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            <section class="section-popular-content" id="popularContent">
                                <div class="container">
                                    <div class="row">
                                        <div class="col text-center section-popular-heading">
                                            <h2 class="section-popular-title">Travel Journey</h2>
                                            <p class="section-popular-subtitle">
                                                Beautiful Stories
                                                <br />
                                                From Travelers Arround the World
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cari" style="margin-bottom: 20px;">
                                        <form action="{{ route('explore_cari') }}" method="GET">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="section-popular-travel row justify-content-center">
                                        @foreach ($items as $item)
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="card-travel text-center d-flex flex-column"
                                                    style="border-color: #ffffff!important;
                                                    border-style: solid!important;
                                                    border-width: 5px 5px 5px 5px!important;">
                                                    <div class="travel-location">{{ $item->title }}</div>
                                                    <div class="travel-country">{{ $item->location }}</div>

                                                    <div class="travel-button mt-auto">
                                                        <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row justify-content-center">
                                        {{ $items->links() }}
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

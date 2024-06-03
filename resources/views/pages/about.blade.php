@extends('layouts.app')
@section('title', 'About | Sarauke')

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
                                    About Jago Wisata
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            {{-- <h1>About Jago Wisata</h1> --}}
                            @if ($global_setting_data->about != '')
                                {{-- <p> --}}
                                    {!! $global_setting_data->about !!}
                                {{-- </p> --}}
                            @endif
                            {{-- <p>
                            Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                            </p>
                            <h2>Tentang Jago Wisata</h2>
                            <p>
                            Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                            </p>
                            <p>
                            Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                            </p>
                            <p>
                            Jago Wisata adalah sebuah website yang menyediakan paket wisata yang beragam dan menarik. Jago Wisata juga menyediakan paket wisata yang dapat di custom sesuai dengan keinginan anda.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

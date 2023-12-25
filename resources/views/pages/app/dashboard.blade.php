@extends('layouts.app')

@section('title', 'Medipet')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
               <img src="img/log.svg"
               alt="logo"
               width="200"
               height="30">
            </div>

            <div class="section-body">
                <div class="section-body">


                        <div class="card-body">
                            <div id="carouselExampleIndicators3"
                                class="carousel slide"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators3"
                                        data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#carouselExampleIndicators3"
                                        data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators3"
                                        data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 h-25"
                                            src="{{ asset('img/dashboard/d1.svg') }}"
                                            alt="First slide"
                                            width="400"
                                            height="10">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 h-25"
                                            src="{{ asset('img/dashboard/d2.svg') }}"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 h-25"
                                            src="{{ asset('img/dashboard/d.svg') }}"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev"
                                    href="#carouselExampleIndicators3"
                                    role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next"
                                    href="#carouselExampleIndicators3"
                                    role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                </div>

                    <p class="section-lead"></p>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                                <div class="article-header">
                                    <div class="article-image"
                                        data-background="{{ asset('img/mr.svg') }}">
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. </p>
                                    <div class="article-cta">
                                        <a href="#"
                                            class="btn btn-primary">Medical Record</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                                <div class="article-header">
                                    <div class="article-image"
                                        data-background="{{ asset('img/grom.svg') }}">
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. </p>
                                    <div class="article-cta">
                                        <a href="#"
                                            class="btn btn-primary">Grooming</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                                <div class="article-header">
                                    <div class="article-image"
                                        data-background="{{ asset('img/vc.svg') }}">
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. </p>
                                    <div class="article-cta">
                                        <a href="#"
                                            class="btn btn-primary">Vaccine</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                                <div class="article-header">
                                    <div class="article-image"
                                        data-background="{{ asset('img/cons.svg') }}">
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. </p>
                                    <div class="article-cta">
                                        <a href="#"
                                            class="btn btn-primary">Consultation</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush

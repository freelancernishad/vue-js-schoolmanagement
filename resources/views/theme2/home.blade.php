
@extends(sitedetails()[0]->theme.'.layout')


@section('container')
    <!-- Main Start -->
    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">



                <?php
                $slider = json_decode(sitedetails()[0]->slider);
                $i = 0;
            ?>

            @foreach ($slider as $sliderRow)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                    class="@if($i==0) active @endif" aria-current="true" aria-label="Slide 1"></button>
                    <?php $i++; ?>
                    @endforeach

        </div>
        <div class="carousel-inner slider_bg_color">



            <?php

            $i = 0;
        ?>

        @foreach ($slider as $sliderRow)
            <div class="carousel-item @if($i==0) active @endif">
                <img class="img-fluid" src="{{ asset($sliderRow->slider) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

            <?php $i++; ?>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- VC Profile -->
    <section id="vc_area">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="vc_profile text-center">

                        <img width="300px" height="300px"
                            src="https://www.iu.ac.bd/public/images/message/dd7d898287506d05d7b6272e3c21215c.jpg"
                            alt="">
                        <p class="mt-3"><small>Professor Dr. Shaikh Abdus Salam</small></p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vc_speech">
                        <h5>অধ্যক্ষের বাণী</h5>
                        <p class="mt-4"><small> {{ sitedetails()[0]->PRINCIPALS_WORDS }}
                                <a href="" class="btn my-3 theme_button">Discover More</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Area -->
    <section id="cta" class="mt-5">
        <div class="cta_bg fun-factor-area default-padding text-center bg-fixed shadow dark-hard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact my-3">
                            <div class="icon">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="info">
                                <span class="timer theme_color" data-to="1921" data-speed="5000">43</span>
                                <span class="medium">Years </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact my-3">
                            <div class="icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="info">
                                <span class="timer theme_color" data-to="1921" data-speed="5000">1600</span>
                                <span class="medium">Students </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact my-3">
                            <div class="icon">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <div class="info">
                                <span class="timer theme_color" data-to="1921" data-speed="5000">20</span>
                                <span class="medium">Building </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact my-3">
                            <div class="icon">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div class="info">
                                <span class="timer theme_color" data-to="1921" data-speed="5000">43</span>
                                <span class="medium">Years </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notice and News -->
    <section id="notice_news">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="btn my-2 theme_button text-capitalize mx-auto section_title"><i
                                class="fas fa-calendar-alt"></i> News & Events</h2>
                    </div>
                    <div class="row pt-4">
                        <div class="">
                            <div class="events theme_shadow overflow-scroll border-1 border-top-0 px-4 "
                                style="height: 540px;">


                                @foreach ($blog as $blogRow)
                                <div class="event rounded-3 bg-white mb-4 py-4 border-bottom">
                                    <div class="info w-100 ps-2 d-flex">
                                        <span class="">
                                            <b style="font-size:28px;">{{ date("d", strtotime($blogRow->created_at)) }}</b>
                                            <br>
                                            {{ date("F Y", strtotime($blogRow->created_at)) }}
                                        </span>
                                        <div class="ms-3">
                                            <h6 class="text-justify fw-bold"> <a class="theme_color" href=""
                                                    target="_blank">{{ $blogRow->title }}</a>
                                            </h6>
                                            <ul>
                                                <li class="text-muted">

                                                </li>
                                                <li>
                                                    <button type="button" class="btn theme_button">Read
                                                        More <i class="fa-solid fa-arrow-right-long"></i> </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach




                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <a href="" class="btn theme_button text-capitalize mx-auto">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <h2 class="btn my-2 theme_button text-capitalize mx-auto section_title"><i
                                class="fa-solid fa-clipboard"></i> Notices</h2>
                    </div>
                    <div class="row pt-4">
                        <div class="">
                            <div class="events theme_shadow overflow-scroll border-1 border-top-0 px-4 "
                                style="height: 540px;">

                                @foreach ($notice as $noticeRow)




                                <div class="event rounded-3 bg-white mb-4 py-4 border-bottom">
                                    <div class="info w-100 ps-2 d-flex">
                                        <span class="">
                                            <b style="font-size:28px;">{{ date("d", strtotime($blogRow->created_at)) }}</b>
                                            <br>
                                            {{ date("F Y", strtotime($blogRow->created_at)) }}
                                        </span>
                                        <div class="ms-3">
                                            <h6 class="text-justify fw-bold"> <a class="theme_color" href=""
                                                    target="_blank">{{ $blogRow->title }}</a>
                                            </h6>
                                            <ul>
                                                <li class="text-muted">

                                                </li>
                                                <li>
                                                    <button type="button" class="btn theme_button">Read
                                                        More <i class="fa-solid fa-arrow-right-long"></i> </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                @endforeach


                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <a href="" class="btn theme_button text-capitalize mx-auto">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus News -->
    <section id="news">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12 text-center section_title">
                    <h2 class="theme_color mb-3">Latest News</h2>
                    <div class="title_border mx-auto"></div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-5">


                @foreach ($blog as $blogRow)
                <div class="col">
                    <div class="card theme_shadow h-100 overflow-hidden" style="    height: 250px !important;">
                        <img src="{{ asset($blogRow->Images) }}"
                            class="card-img-top" alt="...">
                        <div class="card_info pt-4 text-center">
                            <div class="py-3">
                                <small class="theme_color2"><i class=" fas fa-calendar-alt" aria-hidden="true"></i><span
                                        class="date">  {{ date("d F Y", strtotime($blogRow->created_at)) }} </span> </small>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title theme_color">{{ $blogRow->title }}</h5>
                            </div>
                            <div class="">
                                <button type="button" class="btn theme_button">Read More <i
                                        class="fa-solid fa-arrow-right-long"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
            <div class="col-lg-12 text-center mb-4">
                <a href="" class="btn theme_button text-capitalize mx-auto">View All News</a>
            </div>
        </div>
    </section>

    <!-- Motto Area -->
    <section id="motto" class="theme_bg">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <h1 class="text-white">Take a Look at Our Campus Life</h1>
                </div>
            </div>
        </div>
    </section>
    @endsection

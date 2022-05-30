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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class=" @if($i==0) active @endif"
                aria-current="true" aria-label="Slide 1"></button>

                <?php $i++; ?>
                @endforeach

        </div>
        <div class="carousel-inner slider_bg_color">


            <?php
            $slider = json_decode(sitedetails()[0]->slider);
            $i = 0;
        ?>

        @foreach ($slider as $sliderRow)



            <div class="carousel-item  @if($i==0) active @endif">
                <img height="600"
                    src="{{ asset($sliderRow->slider) }}"
                    class="overlay d-block w-100" alt="...">
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

    <!-- VC area -->
    <section id="vc_area">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card border-0 h-100">
                        <div class="vc_card border-0 theme_shadow text-center pt-4">
                            <p><img height="240" width="200"
                                    src="{{ asset(sitedetails()[0]->PRINCIPALS_IMGAGE) }}"
                                    alt=""></p>
                            <small class="fw-bold"> {{ sitedetails()[0]->Principals_name }}</small>
                            <p class="theme_color">Principals</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12 p-4 theme_shadow">
                    <h5 class="theme_color fw-bold">অধ্যক্ষের বাণী</h5>
                    <p class="text_justify">
                        {{ sitedetails()[0]->PRINCIPALS_WORDS }}
                    </p>
                    <button type="button" class="btn btn-warning text-capitalize">Read More <i
                            class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Teacher Section -->
    <section id="ts_area">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 my-5">


                @foreach ($staff as $staffRow)


                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="vc_card border-0 theme_shadow text-center pt-4">
                            <p><img height="240" width="200"
                                    src="{{ asset($staffRow->ProfilePicture) }}"
                                    alt=""></p>
                            <small class="fw-bold">{{ $staffRow->TeacherName }}</small>
                            <p class="theme_color">{{ $staffRow->TeacherPosition }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA aree -->
    <section id="cta" class="my-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12 text-center section_title">
                    <h2 class="theme_color mb-3">University of Dhaka in Numbers</h2>
                    <div class="title_border mx-auto"></div>
                </div>
            </div>
        </div>
        <div class="cta_bg fun-factor-area default-padding text-center bg-fixed shadow dark-hard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact text-center">
                            <div class="icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="info">
                                <span class="timer" data-to="1921" data-speed="5000">1921</span>
                                <span class="medium">Founded </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact text-center">
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="info">
                                <span class="timer" data-to="2000" data-speed="5000">2000 +</span>
                                <div class="clearfix"></div>
                                <span class="medium">Faculty Members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact text-center">
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="info">
                                <span class="timer" data-to="2000" data-speed="5000">37000 +</span>
                                <div class="clearfix"></div>
                                <span class="medium">Regular Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="fun_fact text-center">
                            <div class="icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="info">
                                <span class="timer" data-to="2000" data-speed="5000">134</span>
                                <div class="clearfix"></div>
                                <span class="medium">Constituent & Affiliated Colleges</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Campus -->
    <section id="about_campus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4 class="theme_color mb-3">প্রতিষ্ঠানের ইতিহাস</h4>
                    <p>{{ sitedetails()[0]->HISTORY_OF_THE_ORGANIZATION }}</p>
                    <button type="button" class="btn btn-warning text-capitalize w-100">Read More <i
                            class="fa-solid fa-circle-right"></i></button>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid" src="{{ asset(sitedetails()[0]->HISTORY_OF_THE_ORGANIZATION_IMAGE) }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
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
                    <div class="card theme_shadow h-100">
                        <img src="{{ asset($blogRow->Images) }}" class="card-img-top"
                            alt="...">
                        <div class="card-footer py-3">
                            <small class="text-muted"><i class="theme_color2 fas fa-calendar-alt"></i><span
                                    class="date"> {{ date("d F Y", strtotime($blogRow->created_at)) }} </span> </small>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title theme_color">{{ $blogRow->title }}</h5>

                        </div>
                        <div class="card-footer border-0 bg-white">
                            <button type="button" class="btn btn-outline-warning rounded-pill">Read More <i
                                    class="fa-solid fa-arrow-right-long"></i> </button>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <div class="col-lg-12 text-center mb-4">
                <a href="{{ url('blogs') }}" class="btn btn-warning text-capitalize mx-auto">View All
                    News</a>
            </div>
        </div>
    </section>

    <!-- Events Area -->
    <section id="events">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8">
                    <div class="row my-5">
                        <div class="col-lg-12 text-center section_title">
                            <h2 class="theme_color mb-3">Recent and Upcoming Events</h2>
                            <div class="title_border mx-auto"></div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 mt-5">


                    @foreach ($Event as $EventRow)
                        <div class="col">
                            <div class="card theme_shadow h-100">
                                <img src="{{ $EventRow->Images }}"
                                    class="card-img-top" alt="...">
                                <div class="d-flex">
                                    <div class="card-footer bg-white border-0  border-end py-3">
                                        <p class="text-muted"><span class="theme_color2 fs-4 fw-bold">{{ date("d", strtotime($EventRow->created_at)) }}</span>
                                        <p class="date">{{ date("F, Y", strtotime($EventRow->created_at)) }} </p>
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title theme_color">{{ $EventRow->title }}</h5>

                                    </div>
                                </div>
                                <div class="card-footer border-0 bg-white">
                                    <button type="button" class="btn btn-outline-warning rounded-pill">Read More <i
                                            class="fa-solid fa-arrow-right-long"></i> </button>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                    <div class="col-lg-12 text-center mt-4">
                        <a href="{{ url('events') }}" class="btn btn-warning text-capitalize mx-auto">View All
                            Events</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row my-5">
                        <div class="col-lg-12 text-center section_title">
                            <h2 class="theme_color mb-3">Notices</h2>
                            <div class="title_border mx-auto"></div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="">
                            <div class="events theme_shadow bg-white overflow-scroll border-1 border-top-0 p-4 overflow-hidden"
                                style="height: 440px;">


                                @foreach ($notice as $noticeRow)


                                <div class="event mb-4 pb-4 border-bottom">
                                    <div class="info w-100 ps-2">
                                        <h6 class="text-justify fw-bold"> <a class="theme_color" href=""
                                                target="_blank">{{ $noticeRow->title }}</a>
                                        </h6>
                                        <ul>
                                            <li class="text-muted">
                                                <small>
                                                    Published: {{ date("d F, Y", strtotime($noticeRow->created_at)) }}</small>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-outline-warning rounded-pill">Read
                                                    More <i class="fa-solid fa-arrow-right-long"></i> </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <a href="{{ url('notice') }}" class="btn btn-warning text-capitalize mx-auto">View All
                                    Notices</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection


@extends('layout.layout')


@section('container')



        <!-- Slider -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleCaptions" class="my-1 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">




                <?php
                                $slider = json_decode(sitedetails()->slider);
                                $slidercount = count($slider);
                                // dd($slider);

                            ?>
                            @for($i = 0; $i < $slidercount; $i++)

                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $i }}"
                            class="@if($i==0) active @endif" aria-current="true" aria-label="Slide 1"></button>


                                    @endfor











                        </div>
                        <div class="carousel-inner">




                            @for($i = 0; $i < $slidercount; $i++)

                            <div class="carousel-item @if($i==0) active @endif">
                                <img class="img-fluid" src="{{ asset($slider[$i]) }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>

                            @endfor



                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="container-fluid">
        <div class="row">
            <!-- Left Main -->
            <div class="col-lg-9 my-3">
                <!-- School History -->
                <section class="school_history mb-5">
                    <div class="section_title">
                        <h4 class="bg-primary p-2 text-light">???????????????????????????????????? ??????????????????</h4>
                    </div>
                    <div class="row">
                        <div class="school_image col-lg-4 col-sm-12 col-md-6">
                            <img class="img-fluid" src="{{ asset(sitedetails()->HISTORY_OF_THE_ORGANIZATION_IMAGE) }}" alt="">
                        </div>
                        <div class="school_details col-lg-8 col-sm-12 col-md-6">
                            <p class="text-justify"> {{ sitedetails()->HISTORY_OF_THE_ORGANIZATION }}</p>
                        </div>
                    </div>
                </section>
                <!-- Senior Person Speech -->
                <section class="speech mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section_title">
                                <h4 class="bg-primary p-2 text-light">??????????????????????????? ????????????</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-md-6  principle_photo">
                                    <img class="img-fluid" src="{{ asset(sitedetails()->PRINCIPALS_IMGAGE) }}" alt="">
                                </div>
                                <div class="col-lg-8 col-sm-12 col-md-6  principle_speech text-justify">
                                    {{ sitedetails()->PRINCIPALS_WORDS }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section_title">
                                <h4 class="bg-primary p-2 text-light">?????? ??????????????????????????? ????????????</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-md-6  vice_principle_photo">
                                    <img class="img-fluid" src="{{ asset(sitedetails()->VICE_PRINCIPALS_IMGAGE) }}" alt="">
                                </div>
                                <div class="col-lg-8 col-sm-12 col-md-6  vice_principle_speech text-justify">
                                    {{ sitedetails()->VICE_PRINCIPALS_STATEMENT }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Info Section -->
                <section class="info">
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12  ">
                            <div class="custom_bg pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 text-light">???????????????-??????????????????????????? ????????????</h4>
                                </div>
                                <div class="student_info d-flex align-items-center">
                                    <div class="student_logo p-2">
                                        <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                                    </div>
                                    <div class="student_service">
                                        <ul>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????????-????????????????????? ????????? ?????????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? ???????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????? ??????????????????????????????</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="custom_bg pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 text-light">??????????????????????????? ????????????</h4>
                                </div>
                                <div class="student_info d-flex align-items-center">
                                    <div class="student_logo p-2">
                                        <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                                    </div>
                                    <div class="student_service">
                                        <ul>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????????-????????????????????? ????????? ?????????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? ???????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????? ??????????????????????????????</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="custom_bg pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 text-light">?????????????????????</h4>
                                </div>
                                <div class="student_info d-flex align-items-center">
                                    <div class="student_logo p-2">
                                        <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                                    </div>
                                    <div class="student_service">
                                        <ul>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????????-????????????????????? ????????? ?????????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? ???????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????? ??????????????????????????????</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="custom_bg pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 text-light">???????????????????????? ????????????</h4>
                                </div>
                                <div class="student_info d-flex align-items-center">
                                    <div class="student_logo p-2">
                                        <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                                    </div>
                                    <div class="student_service">
                                        <ul>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????????-????????????????????? ????????? ?????????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? ???????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ??????????????? </li>
                                            <li><i class="fas fa-angle-double-right"></i> ???????????? ??????????????????????????????</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>




            <x-sidebar />

        </div>
    </main>
    <!-- Main End -->


@endsection

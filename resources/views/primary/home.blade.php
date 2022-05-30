@extends(sitedetails()->theme.'.layout')
@section('container')


        <!-- Start main-content -->
        <div class="main-content">
            <!-- Banner Area code Start  -->
            <section id="home" class="divider">
                <div class="container-fluid p-0">

                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="owl-carousel-1col" data-nav="true">

                                <?php
                                $slider = json_decode(sitedetails()->slider);
                                $slidercount = count($slider);
                                // dd($slider);

                            ?>
                            @for($i = 0; $i < $slidercount; $i++)

                                <div class="item ">
                                    <img src="{{ asset($slider[$i]) }}"
                                        alt="{{ asset($slider[$i]) }}" class="img-responsive" width="100%">
                                    </div>


                                    @endfor




                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area code End  -->

            <!-- Marquee Area code Start  -->





            <!-- Section:Message, About and Notice Board code Start  -->
            <section id="about">
                <div class="container  pb-sm-90">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Our Corner <span
                                        class="text-theme-colored3">Message</span></h2>
                                <div class="owl-carousel-1col" data-nav="true">
                                    <div class="item">
                                        <div class="testimonial-wrapper bg-silver-light form-boxshadow text-center">
                                            <div class="content">
                                                <a class=" mb-15 display-block" href="">
                                                    <img alt="Ln. M. K. Bashar PMJF"
                                                        src="primary/images/testimonials/mkbashar.png" class="">
                                                </a>
                                                <h4 class="service-box-title font-20 font-weight-800">লায়ন এম. কে.
                                                    বাশার পিএমজেএফ</h4>
                                                <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">প্রতিষ্ঠাতা ও
                                                    চেয়ারম্যান</span><br>
                                                <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">বিএসবি -
                                                    ক্যামব্রিয়ান এডুকেশন গ্রুপ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-wrapper bg-silver-light form-boxshadow text-center">
                                            <div class="content">
                                                <a class=" mb-15 display-block" href="">
                                                    <img alt="Adv. Ln. Kh. Salima Rowshan"
                                                        src="primary/images/testimonials/madam.jpg" class="">
                                                </a>
                                                <h4 class="service-box-title font-20 font-weight-800">এডভোকেট লায়ন
                                                    খন্দকার সেলিমা রওশন</h4>
                                                <span class="chirman font-18 font-weight-600 mt-5 mt-sm-0">ভাইস
                                                    চেয়ারম্যান</span><br>
                                                <span class="chirman font-18 font-weight-600 mt-5  mt-sm-0">বিএসবি -
                                                    ক্যামব্রিয়ান এডুকেশন গ্রুপ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">About <span
                                        class="text-theme-colored3">Cambrian</span></h2>
                                <p class="font-15 text-justify text-black">{{ sitedetails()->HISTORY_OF_THE_ORGANIZATION }}</p>

                                <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30" href="">Read more</a>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Notice <span
                                        class="text-theme-colored3">Board</span></h2>
                                <div class="bxslider bx-nav-top" data-minslides="4">



                                    @foreach ($notice as $noticeRow)
                                    <div class="event media mt-0 no-bg no-border">
                                        <div class="event-date media-left text-center flip bg-theme-colored pl-10">
                                            <ul class="mt-15 mt-sm-30">
                                                <li class="font-20 text-white font-weight-600">{{ date("d M", strtotime($noticeRow->created_at)) }}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <div class="event-content pull-left flip pl-20 pl-xs-10">
                                                <h4
                                                    class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5">
                                                    <a href="" target="_blank"> {{ $noticeRow->title }}</a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                                <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30" href="">All
                                    Notices</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section:Message, About and Notice code End  -->

            <!-- Section: Choose Us Code Start -->
            <section class="bg-lighter">
                <div class="container  pb-sm-60">
                    <div class="section-title">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-center line-height-1 mt-0">Why<span class="text-theme-colored3">
                                        Choose</span> Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-desktop font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">আধুনিক
                                        বিজ্ঞানাগার</h3>
                                    <p class="text-black">ক্যামব্রিয়ানের রয়েছে অত্যাধুনিক পদার্থ, রসায়ন, জীববিজ্ঞান
                                        ল্যাব ও ব্যবহারিক ক্লাস</p>
                                    <a class="wht_btn" href="">Read More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-user font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">অভিজ্ঞ
                                        শিক্ষক</h3>
                                    <p class="text-black">শিক্ষা প্রতিষ্ঠানের সবচেয়ে গুরুত্বপূর্ণ দিক হচ্ছে অভিজ্ঞ,
                                        প্রশিক্ষিত ও নিবেদিত প্রাণ শিক্ষকমন্ডলী। </p>
                                    <a class="wht_btn" href="">Read
                                        More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-book font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">সমৃদ্ধ
                                        লাইব্রেরি </h3>
                                    <p class="text-black">এ প্রতিষ্ঠানে রয়েছে আধুনিক তথ্য ও বইসমৃদ্ধ লাইব্রেরি; যেখানে
                                        পাঠ্যবইয়ের পাশাপাশি বিভিন্ন বই রয়েছে।</p>
                                    <a class="wht_btn" href="">Read More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-university font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">
                                        স্মার্ট ক্লাসরুম </h3>
                                    <p class="text-black">বাংলাদেশের শিক্ষাঙ্গনে অত্যাধুনিক মাত্র তিনটি স্মার্ট ক্লাস
                                        রুম রয়েছে। একটি আমাদের মাননীয় প্রধানমন্ত্রী শেখ..</p>
                                    <a class="wht_btn" href="">Read
                                        More...</a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-plane font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">
                                        স্কলারশিপ</h3>
                                    <p class="text-black">উচ্চ মাধ্যমিক শেষ করার পরে বিদেশে উচশিক্ষার ক্ষেত্রে রয়েছে
                                        স্কলারশিপ সহ ভিসা সাপোর্ট সুবিধা</p>
                                    <a class="wht_btn" href="" target="_blank">Read More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-bus font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">
                                        ট্রান্সপোর্ট</h3>
                                    <p class="text-black">ছাত্র ও ছাত্রীদের বাড়ি থেকে আনা নেয়ার জন্য রয়েছে পৃথক
                                        এসি/নন-এসি গাড়ির ব্যাবস্থা</p>
                                    <a class="wht_btn" href="">Read More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-building-o font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">
                                        হোস্টেল</h3>
                                    <p class="text-black">ছাত্র ছাত্রীদের জন্য ক্যাম্পাসের খুব কাছেই রয়েছে মনোরম
                                        পরিবেশে থাকা ও খাওয়ার সুব্যাবস্থা</p>
                                    <a class="wht_btn" href="">Read More...</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div
                                    class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40">
                                    <a href="#" class="icon icon-circled icon-md flip mb-20">
                                        <i class="fa fa-trophy font-32 text-white"></i>
                                    </a>
                                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1 text-black">
                                        কো-কারিকুলার</h3>
                                    <p class="text-black">প্রচলিত শিক্ষা পদ্ধতির পাশাপাশি রয়েছে প্রতিটি ছাত্র ছাত্রীদের
                                        জন্য জীবনমুখী শিক্ষা ব্যাবস্থা</p>
                                    <a class="wht_btn" href="">Read
                                        More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Choose Us Code End -->


            <!-- Section: News & Event, Registration and Courses code Start  -->
            <section>
                <div class="container pt-sm-70">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">News & <span
                                        class="text-theme-colored3">Event</span></h2>
                                <div class="bxslider bx-nav-top" data-minslides="4">



                                    @foreach ($Event as $EventRow)
                                    <div class="event media mt-0 no-bg no-border">
                                        <div class="event-date media-left text-center flip bg-theme-colored pl-10">
                                            <ul class="mt-15 mt-sm-30">
                                                <li class="font-20 text-white font-weight-600">{{ date("d M", strtotime($EventRow->created_at)) }}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            <div class="event-content pull-left flip pl-20 pl-xs-10">
                                                <h4
                                                    class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5">
                                                    <a href="">{{ $EventRow->title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                                <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30" href="">All News</a>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="0.3s">
                                <h3 class="mt-0 mb-0 pt-15 pb-15 text-white text-center bg-theme-colored">Get A Free
                                    Registration</h3>
                                <div class="p-20 bg-gray-lighter form-boxshadow">
                                    <!-- Appilication Form Start-->
                                    <form method="POST" action="" accept-charset="UTF-8"
                                        class="reservation-form, mt-10, form-horizontal" enctype="multipart/form-data">
                                        <input name="_token" type="hidden"
                                            value="HuztoMA1ivjOZ0Xa8tJAME3qRVhR3ZrPottB7mCS">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Enter Name" type="text" id="reservation_name"
                                                        name="name" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Email" type="text" id="reservation_email"
                                                        name="email" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Phone" type="text" id="reservation_phone"
                                                        name="phone" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <div class="styled-select mt-0">
                                                        <select name="courses" class="form-control" required>
                                                            <option>Select Your Course</option>
                                                            <option>Play Group</option>
                                                            <option>Nursery</option>
                                                            <option>KG Group</option>
                                                            <option>Class One</option>
                                                            <option>Class Two</option>
                                                            <option>Class Three</option>
                                                            <option>Class Four</option>
                                                            <option>Class Five</option>
                                                            <option>Class Six</option>
                                                            <option>Class Seven</option>
                                                            <option>Class Eight</option>
                                                            <option>Class Nine</option>
                                                            <option>Higher Secondary (HSC)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input name="birthday" class="form-control required date-picker"
                                                        type="text" placeholder="Date of Birth" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <div class="styled-select mt-0">
                                                        <select name="campus" class="form-control" required>
                                                            <option>Choices Your Campuses</option>
                                                            <option>Bhavan - 01, Gulshan-2</option>
                                                            <option>Bhavan - 03, Jogannathpur</option>
                                                            <option>Bhavan - 04, Nodda</option>
                                                            <option>Bhavan - 06, Sahjadpur</option>
                                                            <option>Bhavan - 07, Nodda</option>
                                                            <option>Bhavan - 08, Mirpur</option>
                                                            <option>Bhavan - 12, Keranigonj</option>
                                                            <option>King's School & College</option>
                                                            <option>Winsome School & College</option>
                                                            <option>Metropolitan School & College</option>
                                                            <option>Arabi International School</option>
                                                            <option>Cambrian College, Chittagong</option>
                                                            <option>Cambrian College, Kushtia</option>
                                                            <option>Cambrian College, Ishwardi</option>
                                                            <option>Cambrian College, Brahmanbaria</option>
                                                            <option>Cambrian International School</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Enter Message" rows="1"
                                                        class="form-control required" name="message" id="form_message"
                                                        aria-required="true"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mb-0 mt-10">
                                                    <input name="form_botcheck" class="form-control" type="hidden"
                                                        value="">
                                                    <button type="submit"
                                                        class="btn btn-colored text-black btn-lg btn-block"
                                                        data-loading-text="Please wait..." value="submit">Submit
                                                        Request</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Application Form End-->

                                    <!-- Application Form Validation Start-->
                                    <script>
                                        $("#reservation_form").validate({
                                            submitHandler: function (form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        if (data.status == 'true') {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function () { $(form_result_div).fadeOut('slow') }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                    <!-- Application Form Validation Start -->
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Our <span
                                        class="text-theme-colored3">Courses</span></h2>
                                <div class="owl-carousel-1col" data-nav="true">
                                    <div class="item">
                                        <div class="newcomer">
                                            <img src="primary/images/courses/play.jpg" alt="Play Group">
                                            <div class="newcomer-overlay">
                                                <div class="newcomer-inner">
                                                    <h3 class="text-white">Play Group</h3>
                                                    <h4 class="text-white">01 December to 10 January<br> Admission Open
                                                    </h4>
                                                    <a class="btn btn-flat btn-theme-colored font-weight-600 flip mt-10"
                                                        href="">Visit Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="newcomer">
                                            <img src="primary/images/courses/nursury.jpg" alt="Nursery">
                                            <div class="newcomer-overlay">
                                                <div class="newcomer-inner">
                                                    <h3 class="text-white">Nursery</h3>
                                                    <h4 class="text-white">01 December to 10 January<br> Admission Open
                                                    </h4>
                                                    <a class="btn btn-flat btn-theme-colored3 font-weight-600 flip mt-10"
                                                        href="">Visit Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30" href="">All
                                    Courses</a>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: News & Event, Registration and Courses code End  -->

        </div>
        <!-- end main-content -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
        </script>

        <style>
            .Close {
                z-index: 9999;
                color: #fff;
                background-color: #ff0000;
                border-color: #ff0000;
                font-weight: bold;
            }

            audio {
                width: 100%;
            }
        </style>

        <!-- Popup Code End Code-->

        <!-- Preloader Start Code-->




    @endsection

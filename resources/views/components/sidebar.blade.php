

            <!-- Right Main -->
            <div class="col-lg-3 my-3">
                <!-- Accordion Section -->
                <section class="accordion ">
                    <div class="row">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="bg-danger text-light accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        ভর্তি তথ্য
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                        first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="bg-danger text-light accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        ভর্তি ফরম
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                        second item's accordion body. Let's imagine this being filled with some actual
                                        content.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="bg-danger text-light accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        ফটো গ্যালারী
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                        third item's accordion body. Nothing more exciting happening here in terms of
                                        content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world
                                        application.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="bg-danger text-light accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                        ভিডিও গ্যালারী
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is
                                        intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                        third item's accordion body. Nothing more exciting happening here in terms of
                                        content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world
                                        application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Notice and Facebook  -->
                <section class="">
                    <div class="row">
                        <!-- Notice Board -->
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 mb-0 text-light">নোটিশ বোর্ড</h4>
                                </div>
                                <div class="custom_bg py-2">
                                    <ul style="padding-left:0">
                                        @foreach ($noticeList as $noList)
                                        <li class="ps-3 pb-3"><a class="text-black"  href="{{ $noList->id }}"> <i class="fas fa-angle-double-right"></i> {{ $noList->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Facebook Page -->
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 mb-0 text-light">আমাদের ফেসবুক পেজ</h4>
                                </div>
                                <div class="py-2 text-center">

                                    <div class="fb-page"
                                    data-href="{{ sitedetails()->facebook_page }}"
                                    data-width="380"
                                    data-hide-cover="false"
                                    data-show-facepile="true"></div>



                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Link Section -->
                <section class="">
                    <div class="row">
                        <!-- Official Link -->
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 mb-0 text-light">অফিসিয়াল লিঙ্ক</h4>
                                </div>
                                <div class="custom_bg py-2">
                                    <ul style="padding-left:0">
                                        <li class="ps-3 pb-3"><a class="text-black"  href="http://www.moedu.gov.bd/" target="_blank"> <i class="fas fa-angle-double-right"></i> শিক্ষা মন্ত্রণালয়</a></li>
                                        <li class="ps-3 pb-3"><a class="text-black"  href="http://www.dshe.gov.bd/" target="_blank"> <i class="fas fa-angle-double-right"></i> মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                                        <li class="ps-3 pb-3"><a class="text-black"  href="http://www.banbeis.gov.bd/" target="_blank"> <i class="fas fa-angle-double-right"></i> ব্যানবেইজ</a></li>
                                        <li class="ps-3 pb-3"><a class="text-black"  href="http://www.nctb.gov.bd/" target="_blank"> <i class="fas fa-angle-double-right"></i> এনসিটিবি</a></li>
                                        <li class="ps-3"><a class="text-black"  href="https://www.teachers.gov.bd/" target="_blank"> <i class="fas fa-angle-double-right"></i> শিক্ষক বাতায়ন</a></li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                        <!-- Importent Link -->
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="pb-2">
                                <div class="section_title">
                                    <h4 class="bg-primary p-2 mb-0 text-light">গুরুত্বপূর্ণ লিঙ্ক</h4>
                                </div>
                                <div class="custom_bg py-2">
                                    <p class="ps-3"> <i class="fas fa-angle-double-right"></i> এইখানে লিঙ্ক থাকবে</p>
                                    <p class="ps-3"> <i class="fas fa-angle-double-right"></i> এইখানে লিঙ্ক থাকবে</p>
                                    <p class="ps-3"> <i class="fas fa-angle-double-right"></i> এইখানে লিঙ্ক থাকবে</p>
                                    <p class="ps-3"> <i class="fas fa-angle-double-right"></i> এইখানে লিঙ্ক থাকবে</p>
                                    <p class="ps-3"> <i class="fas fa-angle-double-right"></i> এইখানে লিঙ্ক থাকবে</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

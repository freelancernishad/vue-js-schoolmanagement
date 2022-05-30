
@extends(sitedetails()[0]->theme.'.layout')


@section('container')

	<!-- start main content panel -->
	<div class="container main-panel">

		<div class="margin-top-5">
			<div class="col-sm-12">
				<div class="row">
					<div class="breakingNews bn-turquoise" id="bn3">
						<div class="bn-title" style="width: auto;">
							<h2 style="display: inline-block;">Latest Notices : </h2><span></span>
						</div>
						<ul style="left: 160px;">
							<li style="display: block;">
								<h4 class="scrolling_title">
									<marquee behavior="" direction="" onmouseover="this.stop();"
										onmouseout="this.start();">
										<p>
											<strong style="padding:0px 10px;color: green !important; "><a
													style="font-size:85% !important;" href="" target="_blank"
													class="scroll-notice-link"> ২০২১ সালের এসএসসি ও সমমানের পরীক্ষায়
													উত্তীর্ণ ছাত্র/ছাত্রীদের আন্তরিক শুভেচ্ছা ও অভিনন্দন।</a></strong>
											<strong style="padding:0px 10px;color: green !important; "><a
													style="font-size:85% !important;" href="" target="_blank"
													class="scroll-notice-link"> ২০২১-২০২২ শিক্ষাবর্ষে একাদশ শ্রেণিতে
													বিজ্ঞান ও ব্যবসায় শিক্ষা শাখায় ভর্তি চলছে। জি.পি.এ. ৫ প্রাপ্তদের
													ভর্তি ও বেতন ৫০% ছাড়।</a></strong>
											<strong style="padding:0px 10px;color: green !important; "><a
													style="font-size:85% !important;" href="" target="_blank"
													class="scroll-notice-link"> ২০২২ শিক্ষাবর্ষে
													প্লে-গ্রুপ থেকে ৯ম শ্রেণিতে সীমিত আসনে বাংলা মাধ্যম ও ইংলিশ ভার্সনে
													ভর্তি চলছে</a></strong>
											<strong style="padding:0px 10px;color: green !important; "><span
													style="font-size:85% !important;" class="scroll-notice-link"> ২০২২
													শিক্ষাবর্ষে থেকে মূল ভবন (ব্লক-সি, মিরপুর-১০) এ প্লে-গ্রুপ থেকে
													ইংলিশ ভার্সন চালু করা হয়েছে। সকল অভিভাবকগণ
													আমন্ত্রীত।</span></strong>
										</p>
									</marquee>
								</h4>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid padding-8">
			<div class="row">

				<div class="col-sm-8 col-xs-12" style="margin-top:10px;">
					<div class="row">
						<div style=" position: relative;
    margin: 0px auto;
    top: 0px;
    left: 0px;
    width: 755px;
    height: 448.583px;
    overflow: hidden;
    visibility: visible;">
							<div id="jssor_1"
								style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:350px;overflow:hidden;visibility:hidden;">
								<!-- Loading Screen -->
								<div data-u="loading" class="jssorl-009-spin"
									style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
									<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
										src="{{ asset(sitedetails()[0]->theme.'/img/spin.svg') }}" />
								</div>
								<div data-u="slides"
									style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:350px;overflow:hidden;">
                                    <?php
                                    $slider = json_decode(sitedetails()[0]->slider);
                                    $i = 0;
                                ?>

                                @foreach ($slider as $sliderRow)
									<div class="item @if($i==0) active @endif">
										<img src="{{ asset($sliderRow->slider) }}"
											alt="২০২২ শিক্ষাবর্ষে প্লে-গ্রুপ থেকে নবম শ্রেণি পর্যন্ত বাংলা ও ইংলিশ ভার্সনে ভর্তি চলছে।"
											class="img-responsive slide-img">
									</div>
                                    <?php $i++; ?>
                                    @endforeach

								</div><a data-scale="0" href="" style="display:none;position:absolute;">design web</a>
								<!-- Bullet Navigator -->
								<div data-u="navigator" class="jssorb072"
									style="position:absolute;bottom:16px;right:16px;" data-autocenter="1"
									data-scale="0.5" data-scale-bottom="0.75">
									<div data-u="prototype" class="i"
										style="width:24px;height:24px;font-size:12px;line-height:24px;">
										<svg viewbox="0 0 16000 16000"
											style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
											<circle class="b" cx="8000" cy="8000" r="6666.7"></circle>
										</svg>
										<div data-u="numbertemplate" class="n"></div>
									</div>
								</div>
								<!-- Arrow Navigator -->
								<div data-u="arrowleft" class="jssora073"
									style="width:40px;height:50px;top:0px;left:30px;" data-autocenter="2"
									data-scale="0.75" data-scale-left="0.75">
									<svg viewbox="0 0 16000 16000"
										style="position:absolute;top:0;left:0;width:100%;height:100%;">
										<path class="a"
											d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z">
										</path>
									</svg>
								</div>
								<div data-u="arrowright" class="jssora073"
									style="width:40px;height:50px;top:0px;right:30px;" data-autocenter="2"
									data-scale="0.75" data-scale-right="0.75">
									<svg viewbox="0 0 16000 16000"
										style="position:absolute;top:0;left:0;width:100%;height:100%;">
										<path class="a"
											d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z">
										</path>
									</svg>
								</div>
							</div>
							<script type="text/javascript">jssor_1_slider_init();
							</script>
						</div>



					</div>
				</div>

				<div class="col-sm-4">
					<div class="row">
						<div class="video-box">
							<div class='embed-container'>
								<iframe width="560" height="315" src="" rel="0" frameborder="0"
									allowfullscreen></iframe>
							</div>
						</div>
						<div class="content-box">
							<marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">
								<a target="_blank" href=""><strong class="font-dark"><i class="fa fa-bell-o"></i> Public
										Results and Notice</strong></a>
							</marquee>
						</div>
						<div class="content-box">
							<marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">
								<a href="" target="_blank"><strong class="font-dark"><i class="fa fa-bell"></i> JSC 2020
										Roll Sheet</strong></a>
							</marquee>
						</div>
					</div>
				</div>
			</div>


			<!-- News & Events Section -->
			<div class="container-fluid padding-8">
				<div class="row">
					<div class="col-sm-8">
						<div class="row">
							<h4 class="common-title">Welcome to Glory School & College</h4>
							<div class="col-sm-12">
								<div class="row">
									<div class="box-shadow padding-10 margin-10">
										<div class="padding-10">
											We would like to extend a warm welcome to all new and returning visitors to
											our
											school website.Quality education is the key to nurturing talent, which is
											crucial for the development
											of individual and the society. We ensure quality education to nurture future
											generations.<br>Every day we work hand in hand with parents, teachers,
											educators and community
											members to improve Glory School & College's education system for students of
											all
											backgrounds and abilities. We are committed to create the best learning
											environment that is dynamic, caring, inspiring and satisfying for students,
											teachers
											and parents. <br>Our mission is to instill in our students the foundation
											necessary so that the
											students of pre-primary, primary, secondary and higher secondary can
											identify their
											strength and interest in the learning process and progress continuously. We
											strive
											to create ever better learning outcomes and secure futures for our students,
											based
											on a collaborative culture with shared values and a clear moral purpose.<br>
											We hope that our website provides you with a comprehensive introduction to
											our
											values, expectations and ways of working. <br>
											Thank you very much for your interest in our work.

										</div>
										<div class="col-md-offset-6 col-sm-offset-6 col-xs-offset-6">
											<a href="" class="btn btn-primary margin-top5P"
												data-animate-scroll='{"alpha": "0","y":"50","duration": "1.75","scaleX": "0","scaleY": "0","ease": "Elastic.easeIn"}'>Read
												in Bangla</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Messages</h4>
							<div class="col-sm-12">
								<div class="row">

									<div class="box-shadow padding-10 margin-10">
										<div class="message-box flex">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/15-0x6-2017-1497515919.jpg') }}" alt=""
												class="img-responsive img-thumbnail message-box-img pull-left">
											<div class="message-box-text">
												<div class="message-box-title"><strong>Message From Chairman</strong>
												</div>
												<div class="message-box-name"><strong>MD. Sharaf
														Uddin<br>Chairman</strong></div>
												<span class="btn btn-xs btn-default read-more"><a
														href="message?messageid=101">read more</a></span>
											</div>
										</div>
									</div>

									<div class="box-shadow padding-10 margin-10">
										<div class="message-box flex">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/24-09-2018-1537795928.jpg') }}" alt=""
												class="img-responsive img-thumbnail message-box-img pull-left">
											<div class="message-box-text">
												<div class="message-box-title"><strong>Message From Principal</strong>
												</div>
												<div class="message-box-name"><strong>Professor Md. Ohidur Rahaman </br>
														Ex-Principal :<br>Principal</strong></div>
												<span class="btn btn-xs btn-default read-more"><a
														href="message?messageid=102">read more</a></span>
											</div>
										</div>
									</div>

									<div class="box-shadow padding-10 margin-10">
										<div class="message-box flex">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/07-06-2017-1496811093.png') }}" alt=""
												class="img-responsive img-thumbnail message-box-img pull-left">
											<div class="message-box-text">
												<div class="message-box-title"><strong>Why Study At Glory</strong></div>
												<span class="btn btn-xs btn-default read-more"><a
														href="details?id=2">read more</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- News & Events Section -->
			<div class="container-fluid padding-8">
				<div class="row">
					<div class="col-sm-8">
						<div class="row">
							<h4 class="common-title">News & Events</h4>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/19-11-2019-1574161273.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>HAPPY CLASS PARTY - 2019</b>
											</strong>
											<p>
												<strong>21, Nov, 2019</strong><br>
											<p>Class Party Program Will Be Held On
												21-11-2019&nbsp;at&nbsp;Branch&nbsp;Mirpur-10, Taltala &amp;&...
											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/04-01-2021-1609762539.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>Admission Going On Play-IX</b>
											</strong>
											<p>
												<strong>1, Nov, 2020</strong><br>
											<p>Admission Going On From Play Group to Class IX, Session 2021</p>...
											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/04-01-2021-1609762865.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>Victory Day</b>
											</strong>
											<p>
												<strong>16, Dec, 2020</strong><br>
											<p>Wishing Everyone a Great Victory Day</p>...
											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Notice</h4>
							<div class="col-sm-12">
								<div class="row">
									<div class="box-shadow padding-10 margin-10 overflow-hidden relative"
										style="height:343px !important;">
										<div class="microsoft">
											<p class="marquee">

												<a href="" target="_blank" class="notice-box margin-top-5">
													<span class="notice-date-box pull-left">
														<strong>
															28, Dec<br>
															<span class="text-justify font-md">2021</span>
														</strong>
													</span>
													<span class="notice-scrolling-title">
														Teacher Recruitment Oral Exam Schedule-2021
													</span>
												</a>

												<a href="" target="_blank" class="notice-box margin-top-5">
													<span class="notice-date-box pull-left">
														<strong>
															28, Dec<br>
															<span class="text-justify font-md">2021</span>
														</strong>
													</span>
													<span class="notice-scrolling-title">
														Teacher Recruitment Written Examination Result-2021
													</span>
												</a>

												<a href="" target="_blank" class="notice-box margin-top-5">
													<span class="notice-date-box pull-left">
														<strong>
															20, Dec<br>
															<span class="text-justify font-md">2021</span>
														</strong>
													</span>
													<span class="notice-scrolling-title">
														Teacher Recruitment Written Exam Notice-2021
													</span>
												</a>

												<a href="" target="_blank" class="notice-box margin-top-5">
													<span class="notice-date-box pull-left">
														<strong>
															28, Nov<br>
															<span class="text-justify font-md">2021</span>
														</strong>
													</span>
													<span class="notice-scrolling-title">
														Vaccine Registration Notice and Registration Procedure for Glory
														School and College Students
													</span>
												</a>

												<a href="" target="_blank" class="notice-box margin-top-5">
													<span class="notice-date-box pull-left">
														<strong>
															26, Nov<br>
															<span class="text-justify font-md">2021</span>
														</strong>
													</span>
													<span class="notice-scrolling-title">
														Teacher Recruitment-2021
													</span>
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- News & Events Section -->
			<div class="container-fluid padding-8">
				<div class="row">
					<div class="col-sm-8">
						<div class="row">
							<h4 class="common-title">Achievements</h4>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/24-09-2017-1506279946.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>PSC Achievement</b>
											</strong>
											<p>
												<strong>13, Jun, 2019</strong><br>

											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/24-09-2017-1506279762.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>JSC Achievement</b>
											</strong>
											<p>
												<strong>4, Jun, 2019</strong><br>

											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="row">
									<div class="content-box">
										<div class="event-box">
											<img src="{{ asset(sitedetails()[0]->theme.'/media/imgAll/24-09-2017-1506279915.jpg') }}" alt=""
												class="img-responsive event-box-img">
											<strong class="event-box-title btn full-width text-left margin-top-5">
												<b>S.S.C & H.S.C Achievement</b>
											</strong>
											<p>
												<strong>28, May, 2019</strong><br>

											</p>
											<div>
												<a href="" class="btn btn-warning full-width text-center">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="fb-root"></div>
					<script>(function (d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Facebook</h4>
							<div class="col-sm-12">
								<div class="row">
									<div class="box-shadow padding-10 margin-10">
										<div class="row slideanim">
											<div class="">
												<div class="col-xs-12">
													<div class="fb-page" href="" data-tabs="timeline" data-height="200"
														data-small-header="false" data-adapt-container-width="true"
														data-hide-cover="false" data-show-facepile="true">
														<blockquote href="/" class="fb-xfbml-parse-ignore"><a href="/"
																target="_blank">gloryschoolbd</a></blockquote>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid padding-8">
				<div class="row">
					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Latest Photo Album</h4>
							<div class="col-sm-12">
								<div class="row">
									<div class="">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-6 ">
													<div class="row">
														<div class="box-shadow padding-10 margin-10 ">
															<a href="">
																<img src="{{ asset(sitedetails()[0]->theme.'/media/photoGallery/18-10-2017-1508309823_MG_1275.JPG') }}"
																	alt="" class="img-responsive height-100 width-200">
															</a>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="row">
														<div class="box-shadow padding-10 margin-10 ">
															<a href="">
																<img src="{{ asset(sitedetails()[0]->theme.'/media/photoGallery/18-10-2017-1508309458DSC_0878.JPG') }}"
																	alt="" class="img-responsive height-100 width-200">
															</a>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="row">
														<div class="box-shadow padding-10 margin-10 ">
															<a href="">
																<img src="{{ asset(sitedetails()[0]->theme.'/media/photoGallery/18-10-2017-1508308781IMG_3846.JPG') }}"
																	alt="" class="img-responsive height-100 width-200">
															</a>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="row">
														<div class="box-shadow padding-10 margin-10 ">
															<a href="">
																<img src="{{ asset(sitedetails()[0]->theme.'/media/photoGallery/18-10-2017-1508310198Class Party.jpg') }}"
																	alt="" class="img-responsive height-100 width-200">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Latest Video</h4>
							<div class="col-sm-12">
								<div class="row">
									<div class="">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-6">
													<div class="row">
														<div class="video-box ">
															<div class="embed-container-img">
																<a href=""><img
																		src='http://img.youtube.com/vi/phvrnmLjECI/0.jpg'
																		class='img-responsive'></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="row">
														<div class="video-box ">
															<div class="embed-container-img">
																<a href=""><img
																		src='http://img.youtube.com/vi/phvrnmLjECI/0.jpg'
																		class='img-responsive'></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="row">
														<div class="video-box ">
															<div class="embed-container-img">
																<a href=""><img
																		src='http://img.youtube.com/vi/phvrnmLjECI/0.jpg'
																		class='img-responsive'></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="row">
														<div class="video-box ">
															<div class="embed-container-img">
																<a href=""><img
																		src='http://img.youtube.com/vi/phvrnmLjECI/0.jpg'
																		class='img-responsive'></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<h4 class="common-title">Visitor Statistics</h4>
							<div class="col-sm-12 margin-top-10">
								<div class="box-shadow">

									<!-- <ul class="list-unstyled">
	<li> Now Online Visitors - <b>2</b> </li>
	<li>Today Total Visitors - <b>15</b> </li>
	<li> Yesterday Total Visitors - <b>58</b> </li>
	<li> Weekly Total Visitors - <b>73</b> </li>
	<li> Monthly Total Visitors - <b>724</b> </li>
	<li> Yearly Total Visitors - <b>3260</b> </li>
</ul> -->
									<!-- <div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12"> -->
									<ul class="list-group">
										<li class="list-group-item"><strong>Online : </strong><b>2</b></li>
										<li class="list-group-item"><strong>Today : </strong><b>15</b></li>
										<li class="list-group-item"><strong>Yesterday : </strong><b>58</b></li>
										<li class="list-group-item"><strong>Weekly : </strong><b>73</b></li>
										<li class="list-group-item"><strong>Monthly : </strong><b>724</b></li>
										<li class="list-group-item"><strong>Yearly : </strong><b>3260</b></li>
									</ul>
									<!-- </div>
			</div>
		</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- edn main content panel -->

    @endsection

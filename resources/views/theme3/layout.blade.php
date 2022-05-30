<html lang="en">

<head>
	<!-- Theme Made By www.w3schools.com - No Copyright -->
	<title>{{ sitedetails()[0]->SCHOLL_NAME }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Glory School & College, ">
	<meta name="keywords" content="Glory School & College, GSC, ">
	<meta name="author" content="glorycollege.edu.bd">
	<meta http-equiv="refresh" content="600">
	<meta name="robots" content="all">
	<meta name="rating" content="safe for kids">
	<link rel="canonical" href="http://www.glorycollege.edu.bd">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset(sitedetails()[0]->theme.'/media/icon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset(sitedetails()[0]->theme.'/media/icon/favicon-32x32.png" sizes="32x32') }}">
	<link rel="icon" type="image/png" href="{{ asset(sitedetails()[0]->theme.'/media/icon/favicon-16x16.png" sizes="16x16') }}">
	<link rel="manifest" href="{{ asset(sitedetails()[0]->theme.'/media/icon/manifest.json') }}">
	<link rel="mask-icon" href="{{ asset(sitedetails()[0]->theme.'/media/icon/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/bootstrap.3.3.7.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/font-awesome-4.7.0/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/home-slider.css') }}">
	<link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/slider.css') }}">
	<link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset(sitedetails()[0]->theme.'/css/style.css') }}">
	<script src="{{ asset(sitedetails()[0]->theme.'/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>

	<style>
		/*jssor slider loading skin spin css*/
		.jssorl-009-spin img {
			animation-name: jssorl-009-spin;
			animation-duration: 1.6s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
		}

		@keyframes jssorl-009-spin {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		/*jssor slider bullet skin 072 css*/
		.jssorb072 .i {
			position: absolute;
			color: #000;
			font-family: "Helvetica neue", Helvetica, Arial, sans-serif;
			text-align: center;
			cursor: pointer;
			z-index: 0;
		}

		.jssorb072 .i .b {
			fill: #fff;
			opacity: .3;
		}

		.jssorb072 .i:hover {
			opacity: .7;
		}

		.jssorb072 .iav {
			color: #fff;
		}

		.jssorb072 .iav .b {
			fill: #000;
			opacity: .5;
		}

		.jssorb072 .i.idn {
			opacity: .3;
		}

		/*jssor slider arrow skin 073 css*/
		.jssora073 {
			display: block;
			position: absolute;
			cursor: pointer;
		}

		.jssora073 .a {
			fill: #ddd;
			fill-opacity: .7;
			stroke: #000;
			stroke-width: 160;
			stroke-miterlimit: 10;
			stroke-opacity: .7;
		}

		.jssora073:hover {
			opacity: .8;
		}

		.jssora073.jssora073dn {
			opacity: .4;
		}

		.jssora073.jssora073ds {
			opacity: .3;
			pointer-events: none;
		}
	</style>
	<style>
		.breakingNews>.bn-title {
			width: auto;
			height: 32px;
			display: inline-block;
			background: #0C3F06;
			position: relative;
		}

		.bn-turquoise {
			border-color: #0C3F06;
		}

		.breakingNews {
			width: 100%;
			height: 32px;
			background: #FFF;
			position: relative;
			border: solid 2px #0C3F06;
			overflow: hidden;
		}

		.breakingNews>.bn-title>h2 {
			display: inline-block;
			margin: 0;
			padding: 0 10px;
			line-height: 27px;
			font-size: 16px;
			color: #FFF;
			height: 32px;
			box-sizing: border-box;
		}

		.bn-turquoise>.bn-title>span {
			border-left-color: #0C3F06;
		}

		.breakingNews>.bn-title>span {
			width: 0;
			position: absolute;
			right: -10px;
			top: 5px;
			height: 0;
			border-style: solid;
			border-width: 10px 0 10px 10px;
			border-color: transparent transparent transparent #0C3F06;
		}

		.breakingNews>ul {
			padding: 0;
			margin: 0;
			list-style: none;
			position: absolute;
			left: 180px;
			top: 0;
			right: 40px;
			height: 32px;
			font-size: 14px;
		}

		.breakingNews>ul>li {
			position: absolute;
			height: 32px;
			width: 100%;
			line-height: 30px;
			display: none;
		}

		.scroll-notice-link:hover {
			color: red !important;
		}

		.scrolling_title {
			margin-left: -15px;
			color: red;
			margin-top: 6px;
			font-size: 16px !important;
		}

		/* facebook page responsiveness */
		.fb-page,
		.fb-page span,
		.fb-page span iframe[style] {
			width: 100% !important;
		}
	</style>

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>


	<!-- For PopUp -->
	<script type="text/javascript">
		$(document).ready(function () {
			$("#myModal").modal('show');
		});

		$(window).resize(function () {
			if (this.resizeTO) clearTimeout(this.resizeTO);
			this.resizeTO = setTimeout(function () {
				$(this).trigger('resizeEnd');
			}, 500);
		});

		$(window).bind('resizeEnd', function () {
			var url = $('#$WrapperID').data('refresh');
			$('#$WrapperID').fadeOut("slow", function () {
				$('#$WrapperID').load(url, { width: $('#$HTMLID').width() },
					function () {
						FB.XFBML.parse(document.getElementById('$WrapperID'),
							function () {
								$('#$WrapperID').fadeIn("slow");
							});
					})
			});
		});
	</script>
</head>

<body>
    <x-visitors />
	<div id="fb-root"></div>
	<script>(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	{{-- <div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<!--<img src="media/add/Webp.net-gifmaker.gif" alt="" class="img-responsive">-->
					<img src="{{ asset(sitedetails()[0]->theme.'/media/add/short1.png') }}" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</div> --}}

	<div class="layer-color font-light">
		<header class="container header-box" style="margin-bottom: -2px !important;">
			<div class="header-banner row clearfix">
				<div class="header-logo">
					<a href="{{ url('/') }}">
						<img src="{{ asset(env('FILE_PATH').'logo/'.sitedetails()[0]->logo) }}" class="img-responsive header-logo-img" alt="LOGO">
					</a>
				</div>
				<div class="header-title">
					<h1 class="font-bold">{{ sitedetails()[0]->SCHOLL_NAME }}</h1>
					<div class="font-bold header-text">
						Bangla Medium & English Version
						<span class="pull-right" style="margin-right: 15px;"><a href="" class="margin-right-5"
								target="_blank"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a> <a
								href="" class="margin-right-5" target="_blank"><i class="fa fa-youtube"
									aria-hidden="true"></i></a> <a href="" target="_blank"><i class="fa fa-twitter"
									aria-hidden="true"></i></a></span>
					</div>
					<div class="header-subtitle">
						<span>EIIN: {{ sitedetails()[0]->SCHOLL_CODE }} </span>
					</div>
					<span class="pull-right" style="margin-right: 15px;"><a href="tel:{{ sitedetails()[0]->contact_number }}"><i class="fa fa-map-marker"></i>
							Contact</a> | <a href="mailto:{{ sitedetails()[0]->contact_email }}" target="_blank"><i class="fa fa-envelope"></i> Webmail </a> |
						<a href="{{ url('/teacher/login') }}"><i class="fa fa-map-marker"></i> Login </a></span>
				</div>
				<div class="clearBoth"></div>
			</div>
		</header>
		<div class="navbar-box">
			<div class="">
				<nav class="navbar">
					<div class="container">
						<div class="navbar-header text-center clearBoth">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home"></i></a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav" style="margin-top: -1px;">



								<li class="dropdown header-menu-dropdown">
									<a href="{{ url('teacher') }}">জনবল</a>
								</li>






								<li class="dropdown header-menu-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="">শিক্ষার্থীদের তথ্য
									</a>
									<ul id="admission" class="dropdown-menu animated slideInRight">
										<li><a href="{{ url('student_at_a_glance') }}">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</a></li>
										<li><a href="{{ url('student_list') }}">অধ্যয়নরত শিক্ষার্থীর তালিকা</a></li>
									</ul>
								</li>

                                <li class="dropdown header-menu-dropdown">
									<a href="{{ url('routine') }}">রুটিন</a>
								</li>





								<li class="dropdown header-menu-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="">ফলাফল
									</a>
									<ul id="academic" class="dropdown-menu animated slideInRight">
										<li><a target="_blank"href="http://www.educationboardresults.gov.bd/result.php">পাবলিক পরীক্ষার ফলাফল</a></li>
										<li><a href="{{ url('result') }}">বিদ্যালয়ের অভ্যন্তরীণ পরীক্ষার ফলাফল</a></li>
										<li><a href="{{ url('weakly_result') }}">সাপ্তাহিক পরীক্ষার ফলাফল</a></li>
									</ul>
								</li>

                                <li class="dropdown header-menu-dropdown">
									<a href="{{ url('blogs') }}">ব্লগ</a>
								</li>


                                <li class="dropdown header-menu-dropdown">
									<a href="{{ url('notice') }}">নোটিশ</a>
								</li>


                                <li class="dropdown header-menu-dropdown">
									<a href="{{ url('contact-us') }}">যোগাযোগ</a>
								</li>


							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>



    @yield('container')

    <div class="layer-color font-light">
        <footer class="container">
            <div class="row">
                <div class="footer-box">
                    <div class="col-sm-4">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled margin-bottom11">
                            <li><a href="" target="_blank"><i class="fa fa-anchor" aria-hidden="true"></i> Education
                                    Board</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-anchor" aria-hidden="true"></i> Dhaka
                                    Education Board</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-anchor" aria-hidden="true"></i> Ministry
                                    of Education</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-anchor" aria-hidden="true"></i>
                                    Banbeis</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-anchor" aria-hidden="true"></i>
                                    Directorate of Secondary &amp; Higher Education</a>
                            </li>
                            <li><a href=""><i class="fa fa-anchor" aria-hidden="true"></i> Primary school
                                    e-management</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-sm-4 text-center">
                        <a href="home" class="footer-logo-link">
                            <img src="media/icon/bofpsc_logo.png" class="img-responsive footer-logo-img"  alt="LOGO">
                            <div><strong>BOFCPSC</strong></div>
                        </a>
                    </div> -->
                    <div class="col-sm-4">
                        <address>
                            <h4>Our Address</h4>
                            <p><strong>{{ sitedetails()[0]->SCHOLL_ADDRESS }}</span> <br>
                                 <span> Mobile: {{ sitedetails()[0]->contact_number }}</span><br><span
                                    title="email">Email: {{ sitedetails()[0]->contact_email }}</span></p>
                        </address>
                    </div>
                    <div class="col-sm-4">
                        <address>
                            <h4>Contact US</h4>
                            <p>

                            </p>

                        </address>
                    </div>
                </div>
            </div>
        </footer>
        <div class="full-width bottom-layer">
            <div class="container text-center">
                © 2022 - Glory School & College, All Rights Reserved. Developed by <a href="" target="blank"
                    style="color:yellow;">Desh Universal (Pvt.)
                    Limited.</a> <a href="" target="_blank" style="color:snow;"> Like us on <span
                        style="color:yellow;">Facebook</span></a>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset(sitedetails()[0]->theme.'/js/jquery.3.1.1.js') }}"></script>
<script src="{{ asset(sitedetails()[0]->theme.'/js/bootstrap.3.3.7.js') }}"></script>
<script src="{{ asset(sitedetails()[0]->theme.'/js/jssor.slider-21.1.5.mini.js') }}"></script>
<script src="{{ asset(sitedetails()[0]->theme.'/js/home-slider.js') }}"></script>

<script>
// style.css animation effect js part
$(window).scroll(function () {
    $(".slideanim").each(function () {
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});
</script>

</html>

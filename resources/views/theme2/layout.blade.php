<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ sitedetails()[0]->SCHOLL_NAME }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('theme2/css/style.css') }}">

    <style>
        section.inner-header.divider.layer-overlay.overlay-theme-colored-7 {
            background: #5585ac;
        }

        h1.text-theme-colored2.font-36 {
            color: white;
            margin: 10px 0px;
        }

        .section-content {
            padding: 100px 0 21px 0;
        }
        .mt-10 {
            margin-top: 10px !important;
        }
        .breadcrumb {
            background-color: transparent;
            padding-left: 0;
        }
        .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;

            border-radius: 4px;
        }
        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: 0 0;
            margin-bottom: 1rem;
            list-style: none;
        }
        .text-left {
            text-align: left;
        }
        .breadcrumb>li {
            display: inline-block;
        }
        .breadcrumb.white li a {
            color: #fff;
            font-weight: 600;
        }
        .breadcrumb > li + li::before {
            content: "\f22d";
            font-family: fontawesome;
            font-size: 9px;
        }
        .breadcrumb>li+li:before {
            padding: 0 5px;
            color: #ccc;
            content: "/\00a0";
        }
        .breadcrumb.white li.active {
            color: #c0c0c0;
            font-weight: 700;
        }
        .breadcrumb li.active {
            color: #111111;
        }
        .breadcrumb>.active {
            color: #777;
        }
        .breadcrumb>li {
            display: inline-block;
        }


        .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            background-color: #DFF0D8;
        }
        .table-striped > tbody > tr:nth-child(4n+1) > td, .table-striped > tbody > tr:nth-child(4n+1) > th {
            background-color: #D9EDF7;
        }

        .table-striped > tbody > tr:nth-child(6n+1) > td, .table-striped > tbody > tr:nth-child(6n+1) > th {
            background-color: #ffe5ec;
        }
        tr td a {
            color: #000;
            text-decoration: none;
        }
#show_spin{
    display: none;
}

        </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <x-visitors />
    <!-- Header Start -->
    <header>
        <!-- Header top -->
        <section id="header_top" class="theme_bg py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ms-auto">
                        <div class="">
                            <marquee id="scroll_news" direction="left" ;="">
                                <div onmouseover="document.getElementById('scroll_news').stop();"
                                    onmouseout="document.getElementById('scroll_news').start();">
                                    <a href="https://iu.ac.bd/index.php/site/notice/Mg==">২০২০-২০২১ শিক্ষাবর্ষে A, B এবং
                                        C ইউনিটে ১ম বর্ষ স্নাতক (সম্মান) [ইঞ্জিনিয়ারিং/ফার্মসহ অন্যান্য বিভাগ] শ্রেণীতে
                                        ছাত্র-ছাত্রী ভর্তির বিজ্ঞপ্তি প্রকাশিত

                                    </a>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Navbar -->

        <nav id="myHeader" class="navbar navbar-expand-lg mainmenu">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img height="70px" src="{{ asset(env('FILE_PATH').'logo/'.sitedetails()[0]->logo) }}" alt="">
                    <h2 class="text-white site_title" style="font-size: 20px;">{{ sitedetails()[0]->SCHOLL_NAME }}</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="text-light px-3 nav-link active" aria-current="page" href="{{ url('/') }}">প্রচ্ছদ</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('teacher') }}">জনবল</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-light px-3 nav-link dropdown-toggle" href="javascript:voil(0)"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                শিক্ষার্থীদের তথ্য
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('student_at_a_glance') }}">অধ্যয়নরত
                                        শিক্ষার্থীর সংখ্যা</a></li>
                                <li><a class="dropdown-item" href="{{ url('student_list') }}">অধ্যয়নরত
                                        শিক্ষার্থীর তালিকা</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link" aria-current="page" href="{{ url('routine') }}">রুটিন</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-light px-3 nav-link dropdown-toggle" href="javascript:voil(0)"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ফলাফল
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a target="_blank"href="http://www.educationboardresults.gov.bd/result.php">পাবলিক পরীক্ষার ফলাফল</a></li>
                                <li><a class="dropdown-item" href="{{ url('result') }}">বিদ্যালয়ের অভ্যন্তরীণ
                                        পরীক্ষার ফলাফল</a></li>
                                <li><a class="dropdown-item" href="{{ url('weakly_result') }}">সাপ্তাহিক পরীক্ষার
                                        ফলাফল</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('notice') }}">নোটিশ</a>
                        </li>                        
						<li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('blogs') }}">ব্লগ</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('/contact-us') }}">যোগাযোগ</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('/teacher/login') }}">লগইন</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->



    @yield('container')


    <!-- Footer Start -->
    <footer class="theme_bg py-3">
        <div class="container-fluid">
            <div class="row text-light text-center">
                <div class="col-lg-4">
                    <p>© All Rights Reserved <a class="text-white" href="https://www.softlabltd.com/">Softlab Inc.</a></p>
                </div>
                <div class="col-lg-4 social_icon">
                    <a class="text-light p-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-google-plus-g"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="text-light p-2" href=""><i class="fas fa-rss"></i></a>
                </div>
                <div class="col-lg-4">
                    <p>Design &amp; Developed By <a class="text-white" href="https://www.softlabltd.com/">Softlab Inc.</a></p>
                </div>
            </div>
        </div>
        <a class="btn btn-danger" onclick="topFunction()" id="myBtn" title="Back to top" href="#">➤</a>
    </footer>
    <!-- Footer End -->


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8cffe8c664.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <script src="{{ asset('theme2/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>

</html>

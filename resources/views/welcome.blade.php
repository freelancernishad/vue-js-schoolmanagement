<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ sitedetails()->meta_description }}">
    <meta name="keywords" content="{{ sitedetails()->meta_keywords }}">
    <meta name="author" content="{{ sitedetails()->meta_author }}">
    <title>:: {{ sitedetails()->SCHOLL_NAME }} :: {{ sitedetails()->SCHOLL_ADDRESS }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
	{{-- <script src="https://connect.facebook.net/en-us/sdk.js#xfbml=1&amp;version=v2.5"></script> --}}
<style>
    body{
        background:white !important;
    }
a.active {
    background: #79050b;
    border-radius: 5px;
}


.logo img {
    max-width: 100px;
}

.logo {
    display: flex;
    justify-content: center;
}


    @media (max-width:768px){
        .logo.gov_logo {
    display: none;
}
    }
    @media (max-width:575px){
        .logo img {
    max-width: 65px;
}

.school_deails h1 {
    font-size: 19px;
}

.school_deails h4 {
    font-size: 13px;
}


.for_mobile {
    display: flex;
    flex-direction: row;
}

.logo.school_logo {
    width: 22%;
}

.school_deails {
    width: 77%;
}

    }


    section.inner-header.divider.layer-overlay.overlay-theme-colored-7 {
        background: linear-gradient(0deg, rgb(0 0 0 / 61%),rgb(13 110 253 / 68%)), url({{ asset('bg.jpg') }});
        background-size: cover;
        }

        h1.text-theme-colored2.font-36 {
            color: white;
            margin: 10px 0px;
        }

        .section-content {
            padding: 80px 0 21px 0;
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



        a.item {padding: 7px;font-size: 13px;border: 1px solid #ffac01;margin: 0 2px;transition: all 0.2s;border-radius: 2px;}

a.item:hover {background: #ffab01;color: white;cursor: pointer;}

a.item.active {background: #ffac01;}
.image-container.position-relative.text-center {
    width: 100% !important;
}









</style>
</head>
<body>
    <div id="wrapper">
        <x-visitors />

        <!-- Header Start -->
        <header v-show="$route.path === '/login' || $route.path === '/register' || $route.path === 'forget' ? false : true " style="display: none">
            <!-- Top header -->
            <div class="top_header">
                <div class="container-fluid">
                    <div class="row py-2 for_mobile">
                        <div class="col-lg-2 col-md-2 col-sm-2 logo school_logo">
                            <img class="img-fluid" src="{{ asset(sitedetails()->logo) }}" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-10 text-center school_deails">
                            <h1 class="text-light">{{ sitedetails()->SCHOLL_NAME }}</h1>
                            <h4>{{ sitedetails()->SCHOLL_ADDRESS }}</h4>
                            <h4>স্থাপিতঃ {{ sitedetails()->SCHOLL_BUILD }} কোড নংঃ {{ sitedetails()->SCHOLL_CODE }}</h4>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2  logo gov_logo">
                            <img class="img-fluid" src="https://iconape.com/wp-content/files/wf/258445/svg/258445.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-primary text-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <router-link class="text-light px-3 nav-link " aria-current="page" to="/">প্রচ্ছদ</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="text-light px-3 nav-link " aria-current="page" to="/teachers">জনবল</router-link>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="text-light px-3 nav-link dropdown-toggle" href="javascript:voil(0)" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    শিক্ষার্থীদের তথ্য
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><router-link class="dropdown-item" to="/student_at_a_glance">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</router-link></li>
                                    <li><router-link class="dropdown-item" to="/student_list">অধ্যয়নরত শিক্ষার্থীর তালিকা</router-link></li>

                                </ul>
                            </li>





                            <li class="nav-item">
                                <router-link class="text-light px-3 nav-link" aria-current="page" to="/routine">রুটিন</router-link>
                            </li>


                            <li class="nav-item dropdown">
                                <router-link class="text-light px-3 nav-link" to="/result" id="navbarDropdown" >
                                    ফলাফল
                                </router-link>
                            </li>






                            {{-- <li class="nav-item">
                                <router-link class="text-light px-3 nav-link " aria-current="page" to="/notice">নোটিশ</router-link>
                            </li> --}}

                            <li class="nav-item">
                                <router-link class="text-light px-3 nav-link " aria-current="page" to="/blogs">ব্লগ</router-link>
                            </li>


                            <li class="nav-item">
                                <router-link class="text-light px-3 nav-link " aria-current="page" to="/contact-us">যোগাযোগ</router-link>
                            </li>

                            <li class="nav-item">
                                <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('login') }}">লগইন</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>




            <router-view></router-view>


    <!-- Footer Start -->
    <footer class="bg-primary py-3"  v-show="$route.path === '/login' || $route.path === '/register' || $route.path === 'forget' ? false : true " style="display: none">
        <div class="container-fluid">
            <div class="row text-light text-center">
                <div class="col-lg-4">
                    <p>&copy; All Rights Reserved Softlab Inc.</p>
                </div>
                <div class="col-lg-4 social_icon">
                    {{-- <a class="text-light p-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-google-plus-g"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="text-light p-2" href=""><i class="fas fa-rss"></i></a> --}}
                </div>
                <div class="col-lg-4">
                    <p>Design & Developed By <a  target="_blank" style="    color: #ffc84c;
                        font-size: 20px;
                        text-decoration: none;
                        padding: 5px 10px;" href="https://api.whatsapp.com/send?phone=8801909756552&text=I'm%20interested%20in%20your%20services">Freelacer Nishad</a>.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</div>

<style>
    .fullwidth {
        width: 100%;
        height: 100vh;
        background: #000000e8;
        position: fixed;
        top: 0;
        z-index: 999999;
    }
    .popup {
         position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background:#FF7391;
        height:200px;
        width:330px;
        border-radius:7px;
        border:1px solid #e5e5e5;
        font-family:'helvetica neue';
    }


    .valid {
        height:30px;
        width:30px;
        background:#fff;
        margin:0 auto;
        margin-top:30px;
        border-radius:5px;
    }
    #Layer_2 {
        margin:7px;
    }
    .hhead {
        color:white;
        font-family:helvetica;
        font-size:.9em;
        text-align:center;
        font-weight:bold;
        line-height:10px;
        margin-top:26px;
    }
    .popu_p {
        color:white;
        font-family:helvetica;
        font-size:.75em;
        text-align:center;
        line-height:1px;
        text-shadow: 0px 1px 1px #4CB572;
    }
    .bottom-popup {
        width:100%;
        background:#fff;
        -webkit-border-bottom-right-radius: 7px;
        -webkit-border-bottom-left-radius: 7px;
        -moz-border-radius-bottomright: 7px;
        -moz-border-radius-bottomleft: 7px;
        border-bottom-right-radius: 7px;
        border-bottom-left-radius: 7px;
        margin-top:32px;
        padding:30px 0 30px 0;
    }
    a.start {
        margin:-12px 39% 0 0;
        border-radius:40px;
        background:#FF7391;
        padding:6px 20px 6px 20px;
        font-family:'helvetica';
        color:white;
        font-weight:bold;
        text-decoration:none;
        font-size:.6em;
        float:right;
        -webkit-transition: all .4s ease-out;
        -moz-transition: all .4s ease-out;
        -ms-transition: all .4s ease-out;
        -o-transition: all .4s ease-out;
        transition: all .4s ease-out;
    }
    a.start:hover {
        border-radius:5px;
        -webkit-transition: all .4s ease-out;
        -moz-transition: all .4s ease-out;
        -ms-transition: all .4s ease-out;
        -o-transition: all .4s ease-out;
        transition: all .4s ease-out;
    }
    #Layer_1 {
        float:right;
        margin:10px;
    }

    </style>

<div class="fullwidth" id="fullwidth" style=" display: none;">
    <div class="popup">



        <div class="valid">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" width="15px" height="15px" viewBox="222.744 227.408 67.744 58.526"
            enable-background="new 222.744 227.408 67.744 58.526" xml:space="preserve">
                <path fill="#39BA6F" d="M250.062,285.934c-9.435-11.111-15.731-18.195-27.318-28.935l5.793-5.357
        c6.778,3.28,11.076,5.774,18.693,11.204c14.32-16.25,23.783-24.495,41.372-35.438l1.886,4.335
        C275.983,244.402,265.359,258.502,250.062,285.934z" />
            </svg>
        </div>
         <h1 class="hhead">Welcome!</h1>

        <p class='popu_p'>Thanks For Visiting Our application First Time</p>
        <div class="bottom-popup">
            <a class="start" href="">GET START</a>

        </div>
    </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="{{ asset('frontend/js/script.js') }}"></script>





</body>

</html>

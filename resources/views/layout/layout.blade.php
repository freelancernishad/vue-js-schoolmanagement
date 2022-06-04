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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://connect.facebook.net/en-us/sdk.js#xfbml=1&amp;version=v2.5"></script>
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




</style>
</head>
<body>
    <div id="wrapper">
    <x-visitors />

    <!-- Header Start -->
    <header>
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
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('/') }}">প্রচ্ছদ</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('teacher') }}">জনবল</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="text-light px-3 nav-link dropdown-toggle" href="javascript:voil(0)" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                শিক্ষার্থীদের তথ্য
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('student_at_a_glance') }}">অধ্যয়নরত শিক্ষার্থীর সংখ্যা</a></li>
                                <li><a class="dropdown-item" href="{{ url('student_list') }}">অধ্যয়নরত শিক্ষার্থীর তালিকা</a></li>

                            </ul>
                        </li>





                        <li class="nav-item">
                            <a class="text-light px-3 nav-link" aria-current="page" href="{{ url('routine') }}">রুটিন</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="text-light px-3 nav-link dropdown-toggle" href="javascript:voil(0)" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ফলাফল
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a target="_blank"href="http://www.educationboardresults.gov.bd/result.php">পাবলিক পরীক্ষার ফলাফল</a></li>
                                <li><a class="dropdown-item" href="{{ url('result') }}">বিদ্যালয়ের অভ্যন্তরীণ পরীক্ষার ফলাফল</a></li>
                                <li><a class="dropdown-item" href="{{ url('weakly_result') }}">সাপ্তাহিক পরীক্ষার ফলাফল</a></li>
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
                            <a class="text-light px-3 nav-link " aria-current="page" href="{{ url('/login') }}">লগইন</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


             		@section('container')
					@show()




    <!-- Footer Start -->
    <footer class="bg-primary py-3">
        <div class="container-fluid">
            <div class="row text-light text-center">
                <div class="col-lg-4">
                    <p>&copy; All Rights Reserved Softlab Inc.</p>
                </div>
                <div class="col-lg-4 social_icon">
                    <a class="text-light p-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-google-plus-g"></i></a>
                    <a class="text-light p-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="text-light p-2" href=""><i class="fas fa-rss"></i></a>
                </div>
                <div class="col-lg-4">
                    <p>Design & Developed By Softlab Inc.</p>
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
    h1 {
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
         <h1>Welcome!</h1>

        <p class='popu_p'>Thanks For Visiting Our application First Time</p>
        <div class="bottom-popup">
            <a class="start" href="">GET START</a>

        </div>
    </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="{{ asset('frontend/js/script.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>



        <script>

            var url = window.location.href;
           //  console.log(url);

            if(url==window.location.origin+'/'){
                url = url.split('/');
                url = url[0]+'//'+url[2];
                console.log(url);
            }

            // console.log(window.location.origin);

                if (url == url ) {
                  $('[href="'+url+'"]').addClass('active');
                }


            // console.log(url);





(function($) {

"use strict";


// Form
var contactForm = function() {
    if ($('#contactForm').length > 0 ) {
        $( "#contactForm" ).validate( {
            rules: {
                name: "required",
                subject: "required",
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                name: "Please enter your name",
                subject: "Please enter your subject",
                email: "Please enter a valid email address",
                message: "Please enter a message"
            },
            /* submit via ajax */

            submitHandler: function(form) {
                var $submit = $('.submitting'),
                    waitText = 'Submitting...';

                $.ajax({
                  type: "POST",
                  url: "php/sendEmail.php",
                  data: $(form).serialize(),

                  beforeSend: function() {
                      $submit.css('display', 'block').text(waitText);
                  },
                  success: function(msg) {
                   if (msg == 'OK') {
                       $('#form-message-warning').hide();
                        setTimeout(function(){
                           $('#contactForm').fadeIn();
                       }, 1000);
                        setTimeout(function(){
                           $('#form-message-success').fadeIn();
                       }, 1400);

                       setTimeout(function(){
                           $('#form-message-success').fadeOut();
                       }, 8000);

                       setTimeout(function(){
                           $submit.css('display', 'none').text(waitText);
                       }, 1400);

                       setTimeout(function(){
                           $( '#contactForm' ).each(function(){
                                            this.reset();
                                        });
                       }, 1400);

                    } else {
                       $('#form-message-warning').html(msg);
                        $('#form-message-warning').fadeIn();
                        $submit.css('display', 'none');
                    }
                  },
                  error: function() {
                      $('#form-message-warning').html("Something went wrong. Please try again.");
                     $('#form-message-warning').fadeIn();
                     $submit.css('display', 'none');
                  }
              });
              } // end submitHandler

        });
    }
};
contactForm();

})(jQuery);



if(localStorage.getItem('getschoolid')==null){
    document.getElementById('fullwidth').style.display='block'
}


              </script>


</body>

</html>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/normalize.css') }}"> --}}
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/fonts/flaticon.css') }}">
    <!-- Full Calender CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/fullcalendar.min.css') }}"> --}}
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/animate.min.css') }}">
        <!-- Data Table CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/jquery.dataTables.min.css') }}"> --}}
            <!-- Select 2 CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/select2.min.css') }}"> --}}
    <!-- Date Picker CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard_asset/css/datepicker.min.css') }}"> --}}
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/> --}}
    <!-- Modernize js -->
    {{-- <script src="{{ asset('dashboard_asset/js/modernizr-3.6.0.min.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script> --}}
    <!-- jquery-->
{{-- <script src="{{ asset('dashboard_asset/js/jquery-3.3.1.min.js') }}"></script> --}}



<script src="https://unpkg.com/cropperjs"></script>
<style>


.modal-dialog {
    max-width: 1250px;
    margin: 1.75rem auto;
}


.Present:checked+label.Present {
    background: green
}

.att {
    background: #647a84;
    padding: 10px;
    color: #fff
}

input[type=radio]:checked+label {
    background: red;
    padding: 10px;
    color: #fff;
    font-size: 15px
}

label {
    font-size: 15px
}

button.btn-fill-lg.btn-gradient-yellow.btn-hover-bluedark {
    padding: 7px 7px;
    margin-top: 20px;
}
.filePreview {
    height: 80%;
    display: flex;
    justify-content: center;
    align-items: center;
}

a.item {padding: 7px;font-size: 13px;border: 1px solid #ffac01;margin: 0 2px;transition: all 0.2s;border-radius: 2px;}

a.item:hover {background: #ffab01;color: white;cursor: pointer;}

a.item.active {background: #ffac01;}
.image-container.position-relative.text-center {
    width: 100% !important;
}


    @media(max-width:767px){
        .btn-fill-md, .btn-fill-lg, .fw-btn-fill, .btn-fill-lmd {
    font-size: 13px;
    padding: 8px 15px;
}
th, th label {
    font-size: 13px !important;
}td {
    font-size: 12px;

}

.tablecolhide{
    display: none;
}
.textwrap{
    white-space: break-spaces;
}
.mobilefonthead {
    font-size: 14px;
}

.fixednav {
    position: fixed;
    width: 100%;
    z-index: 10;
}


    }
    .minheight{
        height: 150px;
    }

</style>

{{-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> --}}


<script type="text/javascript">

// jQuery( window ).on( "click", function( event )
//   {

//     const array1 = event.target.classList;
// const classListget = Array.from(array1).find(element => element == 'mobilenavClickbutton');




// console.log(event.target.classList)
// // console.log(event.type)
//   if(event.type=='click'){
//       if(event.target.classList=='mobilenavClickbutton'){

//           document.getElementById('wrapper').classList.add('sidebar-collapsed-mobile')
//         }else{
//               document.getElementById('wrapper').classList.remove('sidebar-collapsed-mobile')

//       }
//   }
//   } );
  </script>

</head>

<body>
    <!-- Preloader Start Here -->
    {{-- <div id="preloader"></div> --}}


    <!-- Preloader End Here -->

    <div id="wrapper" class="wrapper bg-ash">



        <!-- Header Menu Area Start Here -->
         <div class="navbar navbar-expand-md header-menu-one bg-light" id='topnavbar' v-show="$route.path === '/login' || $route.path === '/register' || $route.path === 'forget' ? false : true " >
             <div class="nav-bar-header-one">
                 <div class="header-logo">
                     <a href="index.html">
                         <img src="{{ asset('dashboard_asset/img/logo.png') }}" alt="logo">
                     </a>
                 </div>
                  <div class="toggle-button sidebar-toggle">
                     <button type="button" class="item-link">
                         <span class="btn-icon-wrap">
                             <span></span>
                             <span></span>
                             <span></span>
                         </span>
                     </button>
                 </div>
             </div>
             <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                     <i class="far fa-arrow-alt-circle-down"></i>
                 </button>
                 <button type="button" id="mobilenavClickbutton"  class="mobilenavClickbutton navbar-toggler sidebar-toggle-mobile">
                     <i class="mobilenavClickbutton fas fa-bars" id="mobilenavClickicon"></i>
                 </button>
             </div>
             <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                 <ul class="navbar-nav">
                     <li class="navbar-item header-search-bar">
                         <div class="input-group stylish-input-group">
                             <span class="input-group-addon">
                                 <button type="submit">
                                     <span class="flaticon-search" aria-hidden="true"></span>
                                 </button>
                             </span>
                             <input type="text" class="form-control" placeholder="Find Something . . .">
                         </div>
                     </li>
                 </ul>
                 <ul class="navbar-nav">
                     <li class="navbar-item dropdown header-admin">
                         <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                             aria-expanded="false">
                             <div class="admin-title">
                                 {{-- <h5 class="item-title">{{ Auth::user()->name }}</h5>
                                 <span>{{ Auth::user()->role }}</span> --}}

                             </div>
                             <div class="admin-img">
                                 <img src="{{ asset('dashboard_asset/img/figure/admin.jpg') }}" alt="Admin">
                             </div>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right">
                             <div class="item-header">
                                 {{-- <h6 class="item-title">{{ Auth::user()->name }}</h6> --}}

                             </div>
                             <div class="item-content">
                                 <ul class="settings-list">
                                     <li>

                                      <router-link class="dropdown-item"  onclick="navhide()"  to="/school/logout" >
                                         <i class="flaticon-turn-off"></i> {{ __('Logout') }}
                                      </router-link>

                                         </li>
                                 </ul>
                             </div>
                         </div>
                     </li>







                 </ul>
             </div>
         </div>
         <!-- Header Menu Area End Here -->
         <!-- Page Area Start Here -->
         <div class="dashboard-page-one">
             <!-- Sidebar Area Start Here -->
             <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" v-show="$route.path === '/login' || $route.path === '/register' || $route.path === 'forget' ? false : true " id='leftnavbar'>
                <div class="mobile-sidebar-header d-md-none">
                     <div class="header-logo">
                         <router-link  onclick="navhide()"  to="/school/"><img src="{{ asset('dashboard_asset/img/logo1.png') }}" alt="logo"></router-link>
                     </div>
                </div>
                 <div class="sidebar-menu-content">
                     <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/" class="nav-link"><i class="fas fa-angle-right"></i> Admin</router-link>
                                 </li>
                                 <li class="nav-item">
                                     <a href="index3.html" class="nav-link"><i
                                             class="fas fa-angle-right"></i> Students</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i> Parents</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="index5.html" class="nav-link"><i
                                             class="fas fa-angle-right"></i> Teachers</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/students" class="nav-link"><i class="fas fa-angle-right"></i> All
                                         Students</router-link>
                                 </li>
                                 {{-- <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/students/form" class="nav-link"><i class="fas fa-angle-right"></i>Admission Form</router-link>
                                 </li> --}}
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/student-promotion" class="nav-link"><i
                                             class="fas fa-angle-right"></i> Student Promotion</router-link>
                                 </li>
                                 <li class="nav-item">
                                     <router-link   onclick="navhide()" :to="{name:'studentCard'}" class="nav-link"><i class="fas fa-angle-right"></i> Student Card</router-link>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i
                                     class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/staffs" class="nav-link"><i class="fas fa-angle-right"></i> All
                                         Teachers</router-link>
                                 </li>

                                 {{-- <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/staffs/form" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                         Teacher</router-link>
                                 </li> --}}

                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/staffs/attendance" class="nav-link"><i class="fas fa-angle-right"></i> Attendence</router-link>
                                 </li>



                             </ul>
                         </li>

                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/payment" class="nav-link"><i class="fas fa-angle-right"></i> Payments</router-link>
                                 </li>

                             </ul>
                         </li>









                         <li class="nav-item"> <router-link   onclick="navhide()" :to="{name:'studentsattendance'}" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></router-link> </li>




                         <li class="nav-item"> <router-link   onclick="navhide()" :to="{ name:'routines' }" class="nav-link"><i class="flaticon-checklist"></i><span>Routines</span></router-link> </li>





                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/results" class="nav-link"><i class="fas fa-angle-right"></i> Result</router-link>
                                 </li>

                             </ul>
                         </li>

                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-script"></i><span>Gallery</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/gallery_category" class="nav-link"><i class="fas fa-angle-right"></i> Galley Category</router-link>
                                 </li>
                                 <li class="nav-item"><router-link   onclick="navhide()" :to="{name:'gallerys'}" class="nav-link"><i class="fas fa-angle-right"></i> Gallery</router-link>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link   onclick="navhide()" :to="{ name:'smsNotice' }" class="nav-link"><i class="fas fa-angle-right"></i> Sms Notice</router-link>
                                 </li>
                                 {{-- <li class="nav-item"><router-link  onclick="navhide()"  to="/school/notice" class="nav-link"><i class="fas fa-angle-right"></i> Website Notice</router-link></li> --}}

                             </ul>
                         </li>

                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-script"></i><span>Blogs</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link   onclick="navhide()" :to="{name:'blogs'}" class="nav-link"><i class="fas fa-angle-right"></i>Posts</router-link>
                                 </li>

                                 <li class="nav-item"><router-link   onclick="navhide()" :to="{ name:'blogcategorys' }" class="nav-link"><i class="fas fa-angle-right"></i> Post Categories</router-link>
                                 </li>

                             </ul>
                         </li>




                         <li class="nav-item"><router-link   onclick="navhide()" :to="{name:'events'}" class="nav-link"><i class="flaticon-script"></i><span>Events</span></router-link></li>


                         <li class="nav-item sidebar-nav-item">
                             <a href="#" class="nav-link"><i class="flaticon-script"></i><span>Settings</span></a>
                             <ul class="nav sub-group-menu">
                                 <li class="nav-item">
                                     <router-link  onclick="navhide()"  to="/school/settings" class="nav-link"><i class="fas fa-angle-right"></i> School Profile</router-link>
                                 </li>
                                 <li class="nav-item"><router-link  onclick="navhide()"  to="/school/settings/seo" class="nav-link"><i class="fas fa-angle-right"></i> Seo Settings</router-link></li>
                                 <li class="nav-item"><router-link  onclick="navhide()"  to="/school/settings/slider" class="nav-link"><i class="fas fa-angle-right"></i> Slider</router-link></li>


                             </ul>
                         </li>



                     </ul>
                 </div>
             </div>
             <!-- Sidebar Area End Here -->
             <div class="dashboard-content-one">




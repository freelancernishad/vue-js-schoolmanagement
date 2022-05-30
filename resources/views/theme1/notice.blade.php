

@extends('theme1.layout')


@section('container')
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
    </style>
      <!-- Start main-content -->
      <div class="main-content">

        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="https://www.cambrian.edu.bd/upload/1563426754.jpg">
    <div class="container">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-theme-colored2 font-36">Notice Board</h1>
                    <ol class="breadcrumb text-left mt-10 white">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Notice Board</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Section: All Notices code start here -->
    <section>
    <div class="container pb-sm-30 mt-5">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered">
                        <tr>
                            <th><strong> SL</strong></th>
                            <th width="57%"><strong>Title</strong></th>

                            <th><strong>Publish Date</strong></th>
                            <th class="text-center"><strong>Download</strong></th>
                        </tr>
                        <?php
                        $i = 1;
                        ?>
                        @foreach ($rows as $list)

                       <tr>
                            <td>{{ int_en_to_bn($i++) }}</td>
                            <td><a href="https://www.cambrian.edu.bd/upload/notices/1633263304.pdf" target="_blank"> {{ $list->title }}</a></td>
                            <td><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $list->created_at }}</td>
                            <td class="text-center"><a href="https://www.cambrian.edu.bd/upload/notices/1633263304.pdf" target="_blank"> <i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach

                  </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                {{ $rows->links('layout.dashboard-paginate') }}

            </div>
        </div>
    </div>
    </section>
    </div>
    <!-- end main-content -->

@endsection

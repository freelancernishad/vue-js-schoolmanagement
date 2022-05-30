

@extends('layout.layout')


@section('container')

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

@extends(sitedetails()[0]->theme.'.layout')
@section('container')

  <!-- Start main-content -->
  <div class="main-content">

    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="https://www.cambrian.edu.bd/upload/1563426754.jpg">
<div class="container">
    <!-- Section Content -->
    <div class="section-content">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-theme-colored2 font-36">Events</h1>
                <ol class="breadcrumb text-left mt-10 white">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Events</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Section: All Notices code start here -->
<section>
<div class="container pb-sm-30">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-5">


        @foreach ($Event as $EventRow)
        <div class="col">
            <div class="card theme_shadow h-100">
                <img src="{{ $EventRow->Images }}"
                    class="card-img-top" alt="...">
                <div class="d-flex">
                    <div class="card-footer bg-white border-0  border-end py-3">
                        <p class="text-muted"><span class="theme_color2 fs-4 fw-bold">{{ date("d", strtotime($EventRow->created_at)) }}</span>
                        <p class="date">{{ date("F, Y", strtotime($EventRow->created_at)) }} </p>
                        </p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title theme_color">{{ $EventRow->title }}</h5>

                    </div>
                </div>
                <div class="card-footer border-0 bg-white">
                    <button type="button" class="btn btn-outline-warning rounded-pill">Read More <i
                            class="fa-solid fa-arrow-right-long"></i> </button>
                </div>
            </div>
        </div>
        @endforeach



    </div>

    <div class="row">
        <div class="col-sm-12">

            {{ $Event->links('layout.dashboard-paginate') }}

        </div>
    </div>
</div>
</section>
</div>
<!-- end main-content -->



@endsection

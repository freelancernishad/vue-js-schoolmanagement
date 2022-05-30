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
                <h1 class="text-theme-colored2 font-36">Blogs</h1>
                <ol class="breadcrumb text-left mt-10 white">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Blogs</li>
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


        @foreach ($blog as $blogRow)


        <div class="col-md-4">
            <div class="card theme_shadow h-100">
                <img src="{{ asset($blogRow->Images) }}" class="card-img-top"
                    alt="...">
                <div class="card-footer py-3">
                    <small class="text-muted"><i class="theme_color2 fas fa-calendar-alt"></i><span
                            class="date"> {{ date("d F Y", strtotime($blogRow->created_at)) }} </span> </small>
                </div>
                <div class="card-body">
                    <h5 class="card-title theme_color">{{ $blogRow->title }}</h5>

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

            {{ $blog->links('layout.dashboard-paginate') }}

        </div>
    </div>
</div>
</section>
</div>
<!-- end main-content -->



@endsection

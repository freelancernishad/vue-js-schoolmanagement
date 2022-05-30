
@extends(sitedetails()[0]->theme.'.layout')


@section('container')

 <!-- Start main-content -->
 <div class="main-content">

    <!-- Section: inner-header -->
            <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="https://www.cambrian.edu.bd/upload/1563426754.jpg">
        <div class="container">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-36">Contact Us</h1>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: Contact -->
    <section data-bg-img="images/pattern/p4.png">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Contact Form -->
                        <form method="POST" accept-charset="UTF-8" class="contact-form-transparent" enctype="multipart/form-data"><input name="_token" type="hidden" value="HuztoMA1ivjOZ0Xa8tJAME3qRVhR3ZrPottB7mCS">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject <small>*</small></label>
                                        <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" value="submit">Send your message</button>
                            </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.683090694329!2d90.42217271558857!3d23.794296884567803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7bb09e07f35%3A0x939034ead40d7c5!2sCambrian+School+%26+College!5e0!3m2!1sen!2sbd!4v1524568176849" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->







@endsection

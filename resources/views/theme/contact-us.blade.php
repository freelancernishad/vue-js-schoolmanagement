
@extends('layout.layout')


@section('container')

<style>

body {
  font-family: "Poppins", Arial, sans-serif;
  font-size: 16px;
  line-height: 1.8;
  font-weight: normal;
  background: #fafafa;
  color: #666666; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #2553b8; }
  a:hover, a:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  font-weight: 400;
  font-family: "Poppins", Arial, sans-serif;
  color: #000; }

.bg-primary {
  background: #2553b8 !important; }

.ftco-section {
  padding: 7em 0; }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.heading-section {
  font-size: 28px;
  color: #000; }

.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

.form-control {
  height: 44px;
  background: #fff;
  color: rgba(0, 0, 0, 0.8);
  font-size: 14px;
  border-radius: 2px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: none; }
  .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: rgba(0, 0, 0, 0.3) !important; }
  .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: rgba(0, 0, 0, 0.3) !important; }
  .form-control:-ms-input-placeholder {
    /* IE 0+ */
    color: rgba(0, 0, 0, 0.3) !important; }
  .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: rgba(0, 0, 0, 0.3) !important; }
  .form-control:focus, .form-control:active {
    border-color: #2553b8 !important; }

textarea.form-control {
  height: inherit !important; }

.wrapper {
  width: 100%; }

.contact-wrap {
  background: #e8edf0; }

.dbox {
  width: 100%;
  margin-bottom: 25px;
  padding: 0 20px; }
  @media (min-width: 768px) {
    .dbox {
      margin-bottom: 0;
      padding: 0; } }
  .dbox p {
    margin-bottom: 0; }
    .dbox p span {
      font-weight: 500;
      color: #000; }
    .dbox p a {
      color: #2553b8; }
  .dbox .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #2553b8;
    margin: 0 auto;
    margin-bottom: 20px; }
    .dbox .icon span {
      font-size: 20px;
      color: #fff; }
  .dbox .text {
    width: 100%; }

.btn {
  padding: 12px 16px;
  cursor: pointer;
  border-width: 1px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 400;
  -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
  position: relative;
  margin-bottom: 20px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover, .btn:active, .btn:focus {
    outline: none !important;
    -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important; }
  .btn.btn-primary {
    background: #2553b8 !important;
    border-color: #2553b8 !important;
    color: #fff; }
    .btn.btn-primary:hover, .btn.btn-primary:focus {
      border-color: #1c408e !important;
      background: #1c408e !important; }

.contactForm .label {
  color: #000;
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 600; }

.contactForm .form-control {
  border: none; }

#map {
  width: 100%; }
  @media (max-width: 767.98px) {
    #map {
      height: 300px; } }

#contactForm .error {
  color: red;
  font-size: 12px; }

#contactForm .form-control {
  font-size: 16px; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: red; }

#form-message-success {
  color: #28a745;
  font-size: 18px;
  font-weight: 500; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-size: 16px;
  font-weight: 500;
  color: #2553b8; }

</style>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">যোগাযোগ করুন</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
			
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> {{ sitedetails('SCHOLL_ADDRESS') }}</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://1234567920">+৮৮০১১৭৯৯১৫১৪৩৩</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="service@tmscedu.com">service@tmscedu.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="https://tmscedu.com">https://tmscedu.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  

@endsection

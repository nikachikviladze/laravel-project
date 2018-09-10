@extends('master')
@section('title', 'დაგვიკავშირდით')

@section('stylesheet')

<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/contact.jpg') }}) !important;
	    padding: 228px 0 150px;
	    background-position: top;
	    padding-bottom: 57px;
	}
</style>
@endsection
@section('slider')

<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>დაგვიკავშირდით</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>დაგვიკავშირდით</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')

<div id="contact-area" class="contact-area bg-gray">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">მოგვწერეთ წერილი</h3>
				
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Contact Info -->
			<div class="contact-info col-md-4 col-sm-5 col-xs-12">
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-phone"></i></div>
					<div class="content fix">
						<h5>დაგვიკავშირდით</h5>
						<p>+ 1 432 789 5647 <br />+ 1 432 789 5673</p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-envelope"></i></div>
					<div class="content fix">
						<h5>მეილი</h5>
						<p><a href="#">info@example.com</a><a href="#">info@example.com</a></p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-location-pin"></i></div>
					<div class="content fix">
						<h5>ადგილმდებარეობა</h5>
						<p>3756 Melrose place, <br />CA 87031, Australia</p>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-md-8 col-sm-7 col-xs-12">
				@include('layouts.message')
				<form action="{{ route('contact') }}" method="POST">
					{{ csrf_field() }}
					<div class="input-2">
						<div class="input"><input type="text" name="name" placeholder="სახელი" /></div>
						<div class="input"><input type="email" name="email" placeholder="E-mail" /></div>
					</div>
					<div class="input"><input type="text" name="subject" placeholder="თემა" /></div>
					<div class="input textarea"><textarea name="body" placeholder="შეტყობინება..."></textarea></div>
					<div class="input input-submit"><input type="submit" value="შეტყობინების გაგზავნა" /></div>
				</form>
			</div>
		</div>
		<br><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.703508486025!2d45.47762574277521!3d41.920732046397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404432da3465d325%3A0x2b27d056d554b3ef!2sTelavi!5e0!3m2!1sen!2sge!4v1527433904426" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
@endsection
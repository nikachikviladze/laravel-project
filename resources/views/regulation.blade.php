@extends('master')
@section('title', 'მარეგულირებელი')

@section('stylesheet')
<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/exam.jpg') }}) !important;
	    padding: 228px 0 150px;
		padding-bottom: 50px;
	}
	.blog-title{
		margin-bottom: 40px;
		margin-top: 25px;
	}
	.manImage{
		position: absolute;  
		top: 21%;   
		width: 200px;    
		left: 37%;
	}
	.regContainer{
		position: relative;
		margin-bottom: 5rem;
	}
	.mainRegulation{
		position: absolute;
		right: 15px; 
		top: -35px;
    	
	}
	.mainRegulation span{
		z-index: 10000;
		padding: 5px; 
		display: inline-block; 
		border: 1px solid silver; 
		cursor: pointer;
		background: #e9e9e9;
	}
	.regulationImages img{
		display: none;
		position: absolute; 
		top: 0;
		height: 100%;
	}
	#one, #four, #seven{
		display: block;
	}
	.act{
		background: #fae16e !important;
	}
	.signalN{
		font-size: 18px;
    	font-weight: 700;
	}
	.signalTitle{
		font-size: 16px;
	}
	.signalError{
		color: #ff3547;
	    font-size: 18px;
	    font-weight: 700;
	}
	.signalSuccess{
		color: #00c851;
	    font-size: 18px;
	    font-weight: 700;
	}
	.signal{
		margin: 25px 0;
	}
</style>
@endsection
@section('slider')

<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>მარეგულირებლის სიგნალები</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>მარეგულირებლის სიგნალები</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')


<div class="blog-area bg-white ">
	<div class="container">
		<!-- Gallery Grid -->
		<div class="row">
			<div class="signalcol-lg-12" style="margin-top: 45px; ">
				<div class="col-lg-3 col-lg-offset-2">
					<img src="{{ asset('images/regulation/policman1.svg') }}" alt="">
				</div>
				<div class="col-lg-5">
					<h1 class="signalN">სიგნალი #1</h1>
					<h2 class="signalTitle">ორივე ხელი განზე ან ჩამოშვებული</h2>
					<h3 class="signalError">ზურგის მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი ჩერდება (ქვეითები გადადიან ზურგის და მკერდის პარალელურად)</p>
					<h3 class="signalError">მკერდის მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი ჩერდება (ქვეითები გადადიან ზურგის და მკერდის პარალელურად)</p>
					<h3 class="signalSuccess">გვერდებიდან (ხელების მხრიდან) მომავალი:</h3>
					<p>ყველა ავტომობილი მიდის მხოლოდ პირდაპირ და მარჯვნივ, ტრამვაი მიდის მხოლოდ პირდაპირ</p>
				</div>
				
			</div>

			<div class="signal col-lg-12" style="margin-top: 45px; " >
				<div class="col-lg-3 col-lg-offset-2">
					<img src="{{ asset('images/regulation/policman2.svg') }}" style="height:355px;">
				</div>
				<div class="col-lg-5" >
					<h1 class="signalN">სიგნალი #2</h1>
					<h2 class="signalTitle">მარჯვენა ხელი წინ</h2>
					<h3 class="signalError">მარჯვენა ხელის მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი ჩერდება</p>
					<h3 class="signalError">ზურგის მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი ჩერდება (ქვეითები გადადიან ზურგის პარალელურად)</p>
					<h3 class="signalSuccess">მკერდის მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი მიდის მხოლოდ მარჯვნივ</p>
					<h3 class="signalSuccess">მარცხენა (ჩამოწეული) ხელის მხრიდან მომავალი:</h3>
					<p>ტრამვაი მიდის მხოლოდ მარცხნივ,ყველა სხვა ავტომობილი — ნებისმიერი მიმართულებით</p>
				</div>				
			</div>

			<div class="signal col-lg-12" style="margin-top: 45px; " >
				<div class="col-lg-3 col-lg-offset-2">
					<img src="{{ asset('images/regulation/policman3.svg') }}" style="height:355px;     margin-left: 45%;">
				</div>
				<div class="col-lg-5" >
					<h1 class="signalN">სიგნალი #3</h1>
					<h2 class="signalTitle">მარჯვენა ხელი მაღლა</h2>
					<h3 class="signalError">ოთხივე მხრიდან მომავალი:</h3>
					<p>ყველა ავტომობილი ჩერდება ყველა ქვეითი ჩერდება პატრულის, სახანძროს, სასწრაფოს მანქანებიც ჩერდება</p>
				</div>				
			</div>
			<div class="blog-wrapper col-md-12 col-lg-12 col-xs-12">
				<div class="regulation">

					<h4 class="col-lg-8 col-lg-offset-2 blog-title">მაგალითები გზაჯვარედინზე:</h4>
					<div class="col-lg-8 col-lg-offset-2 regContainer" >


						<div class="mainRegulation">
							<span class="auto act">ავტომობილები</span >
							<span class="tram">ტრამვაი</span >
							<span class="man">ქვეითები</span >
							
						</div>
						<img class="road" src="{{ asset('images/regulation/road.png') }}">
						<img class="manImage" src="{{ asset('images/regulation/man1.svg') }}" >

						<div class="regulationImages">							
							<img src="{{ asset('images/regulation/1.svg') }}"  id="one">
							<img src="{{ asset('images/regulation/2.svg') }}"  id="two">
							<img src="{{ asset('images/regulation/3.svg') }}"  id="three">
						</div>
					</div>

					<div class="col-lg-8 col-lg-offset-2 regContainer" >
						<div class="mainRegulation">
							<span class="auto act">ავტომობილები</span >
							<span class="tram">ტრამვაი</span >
							<span class="man">ქვეითები</span >
							
						</div>
						<img class="road" src="{{ asset('images/regulation/road.png') }}" >
						<img class="manImage" src="{{ asset('images/regulation/man2.svg') }}" >

						<div class="regulationImages">							
							<img src="{{ asset('images/regulation/4.gif') }}"  id="four">
							<img src="{{ asset('images/regulation/5.svg') }}"  id="five">
							<img src="{{ asset('images/regulation/6.svg') }}"  id="six">
						</div>
					</div>

					<div class="col-lg-8 col-lg-offset-2 regContainer" >
						<div class="mainRegulation">
							<span class="auto act">ავტომობილები</span >
							<span class="tram">ტრამვაი</span >
							<span class="man">ქვეითები</span >
							
						</div>
						<img class="road" src="{{ asset('images/regulation/road.png') }}" >
						<img class="manImage" src="{{ asset('images/regulation/man3.svg') }}" >

						<div class="regulationImages">							
							<img src="{{ asset('images/regulation/7.svg') }}"  id="seven">
							<img src="{{ asset('images/regulation/8.svg') }}"  id="eight">
							<img src="{{ asset('images/regulation/9.svg') }}"  id="nine">
						</div>
					</div>				
					
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="" style="height: 100px;"></div>


@endsection

@section('script')

<script>
	$('.auto').on('click', function(event) {
		$('.auto').addClass('act');
		$('.tram, .man').removeClass('act');
		$('#one, #four, #seven').show().siblings().hide();
	});
	$('.tram').on('click', function(event) {
		$('.tram').addClass('act');
		$('.auto, .man').removeClass('act');
		$('#two, #five, #eight').show().siblings().hide();
	});
	$('.man').on('click', function(event) {
		$('.man').addClass('act');
		$('.tram, .auto').removeClass('act');
		$('#three, #six, #nine').show().siblings().hide();
	});


</script>

@endsection
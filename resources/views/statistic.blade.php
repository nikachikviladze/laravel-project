@extends('master')
@section('title', 'სტატისტიკა')

@section('stylesheet')
<style>
	.page-banner-area {
		    background-image: url({{ asset('images/static/banner-bg.png') }}) !important;
		    padding: 228px 0 150px;
			padding-bottom: 50px;
		}
		.info{
			float: right; font-weight: 700; font-size: 20px;
		}
</style>

@endsection
@section('slider')
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>სტატისტიკა</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>სტატისტიკა</span></li>
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
			<div class="signal col-lg-8 col-lg-offset-2" style="margin-top: 45px; ">
				<h3>ჩატარებული ტესტების სტატისტიკა</h3>
				<br>
				<ul class="list-group">
					<li class="list-group-item">გავლილი ბილეთების რაოდენობა: <span class="info">{{ $all }} </span></li>
					<li class="list-group-item">ბოლო კვირას ჩატარებული ბულეთების რაოდენობა: <span class="info">{{ $week }} </span></li>
					<li class="list-group-item">ჩაბარებული გამოცდა: <span class="info text-success">{{ $win }} </span></li>
					<li class="list-group-item">წარუმატებელი გამოცდა: <span class="info text-danger">{{ $looser }} </span></li>
					<li class="list-group-item">სწორი პასუხების რაოდენობა: <span class="info text-success">{{ $correct }} </span></li>
					<li class="list-group-item">არასწორი პასუხების რაოდენობა: <span class="info text-danger"> {{ $wrong }}</span></li>
					<li class="list-group-item">რამდენმა მომხმარებელმა ჩაატარა ტესტი: <span class="info">{{ $users }} </span></li>
					<li class="list-group-item">პოპულარული კატეგორია: <span class="info">B, B1</span></li>
				</ul>
				
			</div>

			@if($themes!=null)

			<div class="signal col-lg-8 col-lg-offset-2" style="margin-top: 45px; ">
				<h3>რთული საკითხები</h3>
				<br>
				<ul class="list-group">
					@foreach($themes as $key=> $v)
						<li class="list-group-item" style="font-weight: 700;">  {{  App\Theme::find($themes[$key][0]['theme_id'])->name }} <span class="badge badge-default  result">{{ intval(count($v)*100/$count ) }}%</span> <span style="color: red; float: right; font-weight: 700;">  <span class="badge badge-danger result" >შეცდომა:{{ count($v) }}</span></span></li>
					@endforeach
				</ul>
				
			</div>
			@endif
			<a style="border: 1px solid silver;" href="@guest {{ route('login') }} @else {{ route('userstatistic', Auth::id()) }} @endguest" class="btn btn-primary btn-block">ჩემი სტატისტიკა</a>		
			
		</div>
	</div>
</div>
<div class="" style="height: 100px;"></div>

@endsection
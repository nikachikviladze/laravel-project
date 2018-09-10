@extends('master')
@section('title', 'გალერეა')

@section('stylesheet')
<style>
	.page-banner-area {
		    background-image: url({{ asset('images/static/banner-bg.png') }}) !important;
		    padding: 228px 0 150px;
			padding-bottom: 50px;
		}
</style>

@endsection
@section('slider')
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>ფოტო გალერეა</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>ფოტო გალერეა</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection
@section('content')

<div id="gallery-area" class="gallery-area bg-gray pt-90 pb-90">
	<div class="container">
		<!-- Gallery Filter -->
		<div class="gallery-filter text-center">
			<button class="active" data-filter="*">ყველა</button>
			@foreach($categories as $categorie)
			<button data-filter=".{{ $categorie->id }}">{{ $categorie->name }}</button>
			@endforeach
		</div>
		<!-- Gallery Grid -->
		<div class="gallery-grid row mb-20">
			@foreach($images as $image)
			<div class="gallery-item {{ $image->gallery_categorie_id }} col-sm-4 col-xs-12">
				<a href="{{ asset('storage/images/'.$image->image) }}" class="gallery-image image-popup">
					<img src="{{ asset('storage/images/'.$image->image) }}" alt="" />
					<div class="content">
						<i class="icofont icofont-search"></i>
						<h4>გაადიდეთ ფოტო</h4>
					</div>
				</a>
			</div>

			@endforeach

		</div>
	
		</div>
	</div>
</div>
@endsection

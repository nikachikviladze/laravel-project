@extends('master')
@section('title', 'კატეგორიები')

@section('stylesheet')
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">

<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/categorie.jpg') }}) !important;
	    padding: 228px 0 150px;
	}
	.categorie{
		text-align: center;
		font-size: 20px; 
		color: #000; 
		margin: 15px 0;
	}
	.infoSection{
		text-align: center;
	}
	.items{
		border: 1px solid silver; 
		height: 180px; 
		margin-bottom: 10px;     
		padding: 15px;
    	text-align: center;
    	display: flex;
    	justify-content: center;
    	flex-direction: column;
	}
	.Itemtitle{
		border-bottom: 1px solid silver;
		padding-bottom: 10px;
		color: black;
	}
	.Itemdescription{
		color: #473a3a;
	}
	button{
		font-size: 23px;
	}
</style>
@endsection
@section('slider')

<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>მართვის მოწმობის კატეგორიები</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>კატეგორიები</span></li>
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
			<button  data-filter=".A">A</button>
			<button  data-filter=".B">B</button>
			<button  data-filter=".C">C</button>
			<button  data-filter=".D">D</button>
			<button  data-filter=".T">T</button>
			<button  data-filter=".S">S</button>
			<button  data-filter=".ტრამვაი">ტრამვაი</button>
		</div>
		<!-- Gallery Grid -->
		@php $x=0;@endphp
		<div class="gallery-grid row mb-20">
			@foreach($infos as $key =>$info)

				<div class="gallery-item {{ $info[0]->categorie->name }} col-md-12">
					@foreach($info->groupBy('type') as $key=> $item)
						<p class="categorie">{{  $key }}</p>
						<div style="text-align: center;">
							<div id="owl-demo{{ ++$x}}" style="margin-bottom: 15px;">
								@foreach($images as $image)
									@if($key==$image->type)
									    <div class="item">
									    	<img src="{{ asset('images/carimages/'. $image->image) }}" width="250">
									    </div>
									@endif
								@endforeach
							</div>							
						</div>
						<div class="row" class="infoSection">
							@foreach($item as $i)
								<div class="col-lg-4">
									<div class="items">
										<p class="Itemtitle">{{ $i->title }}</p>
										<p class="Itemdescription">{{ $i->description }}</p>
									</div>
								</div>
							@endforeach
						</div>
					@endforeach
				</div>

			@endforeach
		</div>
		
	</div>
</div>

@endsection
@section('script')
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<script>

	@for($i=0; $i<20; $i++)
		$("#owl-demo{{ $i }}").owlCarousel({

		    autoPlay: 7000, //Set AutoPlay to 3 seconds

		    items : 1,
		    itemsDesktop : [1199,3],
		    itemsDesktopSmall : [979,3],
		});
	@endfor

</script>

@endsection
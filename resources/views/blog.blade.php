@extends('master')
@section('title', 'ბლოგი')
@section('stylesheet')

<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/blog.png') }}) !important;
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
				<h1>ბლოგი</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>ბლოგი</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection
@section('content')

<div class="blog-area bg-white pt-90 pb-90">
	<div class="container">
		<div class="blog-wrapper row mb-20">
			@foreach($blogs as $blog)
				<div class="blog-item col-md-4 col-sm-6 col-xs-12">
					<a href="{{ url('blog/'.$blog->id) }}" class="image">
						<img src="{{ asset('images/blog/'. $blog->image) }}" style="max-height: 246px;" />
						<i class="icofont icofont-link-alt"></i>
					</a>
					<div class="meta fix">
						<p class="float-left">{{ Date::parse($blog->created_at)->format('l, j F, Y') }}</p>
						<p class="float-right">
							<a href="{{ url('blog/'.$blog->id) }}"><i class="icofont icofont-thumbs-up"></i> {{ count($blog->likes) }} მოწონება</a>
							<a href="{{ url('blog/'.$blog->id) }}"><i class="icofont icofont-speech-comments"></i>@if(!isset($blog->view[0])) 0 @else  {{ $blog->view[0]->count }} @endif ნახვა</a>
						</p>				
					</div>
					<h5 class="title1" style="font-weight: 700;"><a href="{{ url('blog/'.$blog->id) }}">{{ $blog->title }}</a></h5>
					<div class="description1">
						<p>{!!strip_tags(\Illuminate\Support\Str::words($blog->description, 20)) !!}</p>
					</div>
				</div>
			@endforeach			
		</div>
		<div class="pagination text-center">
			{{ $blogs->links() }}
		</div>
	</div>
</div>
@endsection
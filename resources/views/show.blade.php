@extends('master')
@section('title', $blog->title )

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
				<h1>{{ $blog->title }}</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><a href="{{ url('blog') }}">ბლოგი</a></li>
					<li><span>{{ $blog->title }}</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')

<div class="blog-area bg-white pt-90 pb-90">
	<div class="container">
		<!-- Gallery Grid -->
		<div class="row">
			<div class="blog-wrapper float-right col-md-8 col-xs-12">
				<div class="single-blog">
					<div class="blog-image">
						<img src="{{ asset('images/blog/'. $blog->image) }}" alt="" />
					</div>
					<h4 class="blog-title">{{ $blog->title }}</h4>
					<div class="blog-meta fix">
						<p class="float-left">{{ Date::parse($blog->created_at)->format('l, j F, Y') }}</p>
						<p class="float-right">
							<a style="cursor: pointer;" id="like" class="@if($userLike==true) true @endif"><i class="icofont icofont-thumbs-up"></i> <span id="likeCount">{{ $likes }}</span> მოწონება</a>
							<a style="cursor: pointer;"><i class="icofont icofont-eye"></i> <span id="count">{{ $count }}</span> ნახვა</a>
						</p>
					</div>
					<div class="blog-description">
						{!!  $blog->description !!}
					</div>
					
				</div>				
				<!-- Comment Form -->
				<div class="comment-form-wrapper pt-90">
					<h5 class="sub-title">კომენტარის დამატება</h5>
					<!-- Comment Form -->
					<div class="comment-form form text-left">
							<div class="input textarea"><textarea name="message" placeholder="კომენტარი" id="description"></textarea></div>
							<div class="input input-submit"><input type="submit" value="გაგზავნა" id="addComment" /></div>
					</div>
				</div>
			</div>
			<div class="sidebar col-md-4 col-xs-12">
				<div class="single-sidebar">
					<h5 class="sidebar-title">ჩვენ შესახებ</h5>
					<div class="about-sidebar">
						<p>ავტოსკოლაში მოსული სტუდენტების აბსოლუტური უმრავლესობა მართვის მოწმობას პირველივე გასვლაზე იღებს. ჩვენ ვიცით როგორ უნდა ისწავლო და აიღო მართვის მოწმობა მალე</p>
					</div>
				</div>
				<div class="single-sidebar">
					<h5 class="sidebar-title">კატეგორიები</h5>
					<div class="category-sidebar">
						<ul>
							@foreach($categories as $cat)
							<li><a href="{{ url('blog?id='. $cat->id) }}">{{ $cat->name }} ({{count($cat->blog)}})</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="single-sidebar">
					<h5 class="sidebar-title">ბოლო სიახლეები</h5>
					<div class="latest-blog-sidebar">
						@foreach($blogs as $b)
							<div class="sin-blog fix">
								<a href="{{ url('blog/'.$b->id) }}" class="image float-left"><img src="{{ asset('images/blog/'. $b->image) }}" alt="" /></a>
								<div class="content fix">
									<a href="{{ url('blog/'.$b->id) }}">{{ $b->title }}</a>
									<p><i class="icofont icofont-calendar"></i> {{ Date::parse($blog->created_at)->format('l, j F, Y') }}</p>
								</div>
							</div>
						@endforeach
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

<script>
	$.ajax({
		url : "{{ route('seeview') }}",
		type : "get",
		data: {id:{{ $blog->id }} },
		success : function(data) {
			$('#count').html(data);
		}
		
	});

	$('#like').on('click', function(event) {

		$.ajax({
			url : "{{ route('like') }}",
			type : "get",
			data: {id:{{ $blog->id }} },
			success : function(data) {
				$('#likeCount').html(data.count);

				if (data.liked==true) {
					$('#like').addClass('true');
					
				}else{
					$('#like').removeClass('true');
				}
			}			
		});		
	});
	
</script>



@endsection
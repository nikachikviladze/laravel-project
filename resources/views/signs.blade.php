@extends('master')
@section('title', 'საგზაო ნიშნები')

@section('stylesheet')

<style>
	.page-exam-area {
	    background-image: url({{ asset('images/static/signs.jpg') }}) !important;
	    padding: 228px 0 150px;
    	padding-bottom: 100px;
	}
	.gallery-item{
		cursor: pointer;
		text-align: center;
	}
	.sign-content{
		 height:250px;
		 text-align: center;
		 overflow: hidden;
	}
	.sign-content img{
		display: inline-block;
		max-width: 200px;
		max-height: 200px;
		vertical-align: middle;
	}

</style>
@endsection
@section('slider')

<div class="page-exam-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>საგზაო ნიშნები</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>საგზაო ნიშნები</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')


<div id="gallery-area" class="gallery-area bg-gray pt-90 pb-60">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">საგზაო ნიშნების ცნობარი</h3>
                <div class="excerpt">
                    <p style="font-size: 15px;">საგზაო ნიშნები მოძრაობის უსაფრთხოების მოწესრიგებისა და უზრუნველყოფის მნიშვნელოვანი საშუალებაა. ისინი აფრთხილებენ საგზაო მოძრაობის მონაწილეებს სხვადასხვა სახიფათო უბნებთან მიახლოების შესახებ, ზღუდავენ ან კრძალავენ ქუჩებისა და გზების ცალკეულ უბნებზე ზოგიერთი სატრანსპორტო საშუალების მოძრაობას, აწესრიგებენ გზაჯვარედინის, სავალი ნაწილების გადაკვეთისა და გზის ვიწრო უბნის გავლის თანმიმდევრობას, აზუსტებენ ძირითადი ნიშნების მოქმედების ზონას, დროს, მანძილს ობიექტამდე ან ზღუდავენ მათ მოქმედებასნებას.</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <!-- Gallery Filter -->
        <div class="gallery-filter text-center">
            <button  class="active btn btn-primary data-filter="*">ყველა</button>
            @foreach($categories as $key=>$categorie)
            	<button class="btn btn-primary" data-filter=".{{ $key+1 }}"><img src="{{ asset('images/sign/'. $categorie->id. '.svg') }}" width="20"> {{ $categorie->name }}</button>
            @endforeach
        </div>
        <!-- Gallery Grid -->
        <div class="gallery-grid row">
        	@foreach($signs as $key=>$sign)
            <div class="gallery-item {{ $sign->sign_id }} col-md-3 col-sm-4 col-xs-12">
            	<div class="sign-content" data-toggle="modal" data-target="#exampleModal{{ $key }}">
            		<img style="    width: 100%; height: 100%;" src="{{ asset('svg/'.$sign->id). '.svg' }}" alt="">
            		<p>{{ $sign->title }}</p>
            	</div>
            	<div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	  <div class="modal-dialog" role="document">
            	    <div class="modal-content">
            	      <div class="modal-header">
            	    	<img style="    width: 250px;" src="{{ asset('svg/'.$sign->id). '.svg' }}" alt="">
            	    	<p style="color: red;">{{ $sign->title }}</p>
            	        <h5 class="modal-title" id="exampleModalLabel">{{  $sign->question }}</h5>
            	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            	          <span aria-hidden="true">&times;</span>
            	        </button>
            	      </div>
            	      <div class="modal-body">
            	        {{ $sign->description }}
            	      </div>
            	      <div class="modal-footer">
            	        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
            	      </div>
            	    </div>
            	  </div>
            	</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@extends('master')
@section('title', 'სწავლება')

@section('stylesheet')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />
<style>
	.page-exam-area {
	    background-image: url({{ asset('images/static/study.jpg') }}) !important;
	    padding: 300px 0 150px;
		padding-bottom: 35px;
	}
</style>

@endsection
@section('slider')
<div class="page-exam-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>ბილეთების სწავლა</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>სწავლა</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')
@php 
if (app()->getLocale()=='ka') {
	$lang= 0;
}elseif(app()->getLocale()=='en')
{
	$lang=1;
}else{
	$lang=2;
}
@endphp 
<div class="" style="height: 100px;"></div>

<div class="examcontainer">
	<div class="exam_tips">
		@foreach($categories as $categorie)

			<div class="tipsbox @if(request()->name==$categorie->name) selected @endif">
				<a href="{{ route('tickets', ['group'=>request()->group, 'name'=>$categorie->name]) }}" title="{{  $categorie->description }}">
					<div class="svg">
						 {{ svg_image($categorie->icon)->id('settings-icon')->dataFoo('bar')->dataBaz() }}
					</div>
					<span class="tiptitle">{{ $categorie->name }}</span>
				</a>
			</div>
		@endforeach
	</div>
	

    <div class="row">
    	<div class="col-lg-2">
    		<ul class="test_category">
    			<a href=" {{ route('tickets') }} "><li>ყველა</li></a>
    			@foreach($themes as $key=>$theme)

    			<a  href="@if(request()->name==null) {{ route('tickets', ['group'=>$theme->id ]) }} @else {{ route('tickets', ['group'=>$theme->id, 'name'=>request()->name ]) }} @endif "><li class="@if(request()->group==$key+1) select @endif">
    				{{ $key+1 }} {{ $theme->name }}</li></a>

    			@endforeach   			
    		</ul>
    	</div>
    	<div class="col-lg-8 col-md-offset-1">
    		<ul class="navbar-nav ml-auto" style="float: right;">
    		    <li class="nav-item dropdown">
    		        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    		           აირჩიე ენა <span class="caret"></span>
    		        </a>

    		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

    		            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    		                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
    		                        {{ $properties['native'] }}
    		                </a>
    		                <br>
    		            @endforeach


    		           
    		        </div>
    		    </li>
    		</ul>
    		<div class="tickets_box" id="quizz">
    			<p class="cat">{{ $catName }} კატეგორია</p>
    			<p class="ticketsName">{{ $name }}</p>
    			<p class="count">სულ:{{ $count }} ბილეთი</p>

    			<div class="detailsection" style="margin: 20px 0;">
    				@if(request()->name==null && request()->group==null)
    					{{  $questions->links() }}
    				@elseif(request()->name==null && request()->group!=null)
    					{{ $questions->appends(Request::only('group'))->links() }}
    				@elseif(request()->name!=null && request()->group==null)
    					{{ $questions->appends(Request::only('name'))->links() }}
    				@elseif(request()->name!=null && request()->group!=null)
    					{{  $questions->appends(Request::input())->links() }}
    				@endif
    				<br>
    				<div class="search" style="margin: 20px 0;">
    					<input id="number" type="number" class="form-control" placeholder="ჩაწერე ბილეთის ნომერი..." min="1" max="1741">
    				</div>
    			</div>

    			@foreach($questions as $key=>$q)
    			@if(isset($q->questions[$lang]))
    				<div class="ticket">
    					<div class="questionHeader">
    							<span class="number">#{{  $q->questions[$lang]->question_id }}</span> 
    							<div class="title" >{{ $q->questions[$lang]->question }} </div>  				 	
    							<button type="button" class="btn btn-primary description" data-toggle="modal" data-target="#exampleModal{{ $key }}">
    							  განმარტება
    							</button>

    							<div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    							  <div class="modal-dialog" role="document">
    							    <div class="modal-content">
    							      <div class="modal-header">
    							        <h5 class="modal-title" id="exampleModalLabel">{{  $q->questions[$lang]->question}}</h5>
    							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    							          <span aria-hidden="true">&times;</span>
    							        </button>
    							      </div>
    							      <div class="modal-body">
    							        {{ $q->questions[0]->description }}
    							      </div>
    							      <div class="modal-footer">
    							        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
    							      </div>
    							    </div>
    							  </div>
    							</div>

    							@if($q->image!=null)
    								<img src="{{ asset('tickets/'. $q->image) }}" style="margin-bottom: 10px;"> 			
    							
    							@endif  						
    					</div>
    					<div class="info pull-right">
	    					<span>{{ $q->theme->name }}</span> 

	    					@foreach($q->cat as $tag)
	    						<a href="{{ route('tickets', ['name'=> $tag->name ]) }}" class="badge">{{ $tag->name }}</a>
	    					@endforeach    									
    					</div>
    					<div style="clear: both;"></div>
    					<ul class="list-group">

    						<li class="list-group-item"  ans="{{$q->options[0]->answer }}" position="1" @if($q->options[0]->answer == 1) data-corect-answer="true" @endif>{{ $q->options[$lang]->option1 }}</li>
    						<li  class="list-group-item" ans="{{$q->options[0]->answer}}" position="2" @if($q->options[0]->answer == 2) data-corect-answer="true" @endif>{{ $q->options[$lang]->option2}}</li>
    						@if( !empty($option->option3))
    						<li  class="list-group-item" ans="{{$q->options[0]->answer }}" position="3" @if($q->options[0]->answer == 3) data-corect-answer="true" @endif>{{ $q->options[$lang]->option3 }}</li>
    						@endif
    						@if(!empty($option->option4))
    						<li  class="list-group-item" ans="{{$q->options[0]->answer }}" position="4" @if($q->options[0]->answer == 4) data-corect-answer="true" @endif>{{ $q->options[$lang]->option4 }}</li>
    						@endif
    					</ul>
    				</div>
    				@endif

    			@endforeach
    			@if(request()->name==null && request()->group==null)
    				{{  $questions->links() }}
    			@elseif(request()->name==null && request()->group!=null)
    				{{ $questions->appends(Request::only('group'))->links() }}
    			@elseif(request()->name!=null && request()->group==null)
    				{{ $questions->appends(Request::only('name'))->links() }}
    			@elseif(request()->name!=null && request()->group!=null)
    				{{  $questions->appends(Request::input())->links() }}
    			@endif
    		</div>
    	</div>

    </div>


	</div>

<div class="" style="height: 100px;"></div>

@endsection
@section('script')

	<script>
		$( document ).ready(function() {

		    $('#quizz li').on('click',  function(event) {
		    	var answer = $(this).attr('ans');
		    	var position  = $(this).attr('position');

		    	if (answer==position) {
		    		$(this).addClass('bg-success');
		    		$(this).siblings().off('click');
		    		$(this).off('click');
		    	}else{

		    		$(this).addClass('bg-danger');
		    		$(this).siblings('li[data-corect-answer="true"]').addClass('bg-success');
		    		$(this).siblings().off('click');
		    	}
		    });
		    $(document).on('keyup keypress', '#number', function(e) {
		      if(e.which == 13) {
		        e.preventDefault();
		        return false;
		      }
		    });

		    //ბილეთების ძებნა აჯაქსით

		    $('#number').on('click keyup', function(e) {
		    	var number =$(this).val();

		    	if (number>0 &&  number<=1741) {
		    		$.ajax({
		    		    url : "{{ route('number') }}",
		    		    type : "get",
		    		    data: {number:number},
		    		    success : function(data) {
		    		    	$('.pagination').remove();
		    		    	
		    		    	$('.ticket, .padination, .count').remove();
		    		    	$('.cat').empty();
		    		    	console.log(data);


		    		    	content = '<div class="ticket"><div class="questionHeader"><span class="number">'+data.questions.questions[{{$lang}}].question_id+'</span>'+data.questions.questions[{{$lang}}].question+'<button type="button" class="btn btn-primary description" data-toggle="modal" data-target="#exampleModal5">განმარტება</button><div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">'+data.questions.questions[{{$lang}}].question+'</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">'+data.questions.questions[0].description+'</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button></div></div></div></div>';
		    		    	if(data.questions.image!=null)
		    		    	{
		    		    		content+= '<img src="{{ url('/tickets') }}/'+data.questions.image+'" style="margin-bottom: 10px;">';
		    		    	}
		    		    	content+= '</div><ul class="list-group"><li class="list-group-item"  ans="'+data.options[0].answer+'" position="1"';
		    		    	if (data.options[0].answer == 1){
		    		    		content += 'data-corect-answer="true"';
		    		    	}
		    		    	content +='>'+data.options[{{$lang}}].option1+'</li><li  class="list-group-item" ans="'+data.options[0].answer+'" position="2"';
		    		    	if (data.options[0].answer == 2){
		    		    		content += 'data-corect-answer="true"';		    		    		
		    		    	}
		    		    	content +='>'+data.options[{{$lang}}].option2+'</li>';
		    		    	if(data.options[0].option3!=null)
		    		    	{
		    		    		content +='<li  class="list-group-item" ans="'+data.options[0].answer+'" position="3"';
		    		    		if(data.options[0].answer == 3)
		    		    		{
		    		    			content += 'data-corect-answer="true"';
		    		    		}
		    		    		content += '>'+data.options[{{$lang}}].option3+'</li>';
		    		    	}
		    		    	if(data.options[0].option4!=null)
		    		    	{
		    		    		content +='<li  class="list-group-item" ans="'+data.options[{{$lang}}].answer+'" position="4"';
		    		    		if(data.options[0].answer == 4)
		    		    		{
		    		    			content += 'data-corect-answer="true"';
		    		    		}
		    		    		content += '>'+data.options[{{$lang}}].option4+'</li>';
		    		    	}
		    		    	content+='</ul></div>';
		    		    	categorie='';

		    		    	data.categories.forEach(function(item){
		    		    		categorie+='<span class="badge badge-success" style="margin-right:3px;">'+item.name+'</span>';
		    		    	});

		    		    	
		    		    	$('.detailsection').append(content);
		    		    	$('.ticketsName').html(data.theme);
		    		    	$('.cat').html(categorie);

		    		    	// გაცემული პასუხის სისწორის და სიმცდარის შემოწმება აჯაქსის დროს

		    		    	$('#quizz li').on('click',  function(event) {
		    		    		var answer = $(this).attr('ans');
		    		    		var position  = $(this).attr('position');

		    		    		if (answer==position) {

		    		    			$(this).addClass('bg-success');
		    		    			$(this).siblings().off('click');
		    		    			$(this).off('click');
		    		    		}else{

		    		    			$(this).addClass('bg-danger');
		    		    			$(this).siblings('li[data-corect-answer="true"]').addClass('bg-success');
		    		    			$(this).siblings().off('click');
		    		    		}
		    		    	});
		    		    } 
		    		});
		    	}		    	
		    });
		    //ბილეთების ძებნა დამთავრდა
		});

	</script>
@endsection

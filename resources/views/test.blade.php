@extends('master')
@section('title', 'გავლილი ტესტი')

@section('stylesheet')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />
<style>
	.page-exam-area {
        background-image: url({{ asset('images/static/banner-bg.png') }}) !important;
    	padding: 80px;
	}
</style>
@endsection
@section('slider')
<div class="page-exam-area overlay overlay-black overlay-70"></div>
@endsection
@section('content')

<div class="" style="height: 100px;"></div>

<div class="examcontainer">

    <div class="row">
    	
    	<div class="col-lg-8 col-md-offset-2">
    		<div class="tickets_box" id="quizz">
    			<p class="cat">კატეგორია:{{$result->categorie->name}}</p>
    			<p class="ticketsName" style="padding: 0;">სწორი პასუხი: <span style="color:#00c851; ">{{ $result->correct }}</span>	</p>
    			<p class="count">არასწორი პასუხი: <span style="color:#ff3547; ">{{ $result->wrong }}</span></p>
    			<p style="text-align: center;">დრო:{{ $result->time }} წთ</p>
    			<p style="text-align: center;">ტესტის ჩატარების დრო:{{ Date::parse($result->created_at)->format('l j F Y') }}</p>

                <button type="button" class="btn btn-warning description" data-toggle="modal" data-target="#exampleModal10000">
                  ბილეთის ანალიზი
                </button>

                <div class="modal fade" id="exampleModal10000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700;">დაშვებული შეცდომები თემების მიხედვით:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <ul class="list-group">
                            @if($t==null)
                                <li><span style="color: green;">გილოცავთ, თქვენ იდეალურად ფლობთ საკითხებს, შეცდომა არ დაგიშვიათ!</span></li>

                            @else
                               @foreach($t as $key=> $v)
                                <li class="list-group-item"><a href="{{ url('study?group='.  App\Theme::find($t[$key][0]['theme_id'])->id .'&name='. $result->categorie->name) }}">  {{  App\Theme::find($t[$key][0]['theme_id'])->name }} <span style="color: red; float: right; font-weight: 700;"> შეცდომა:{{ count($v) }}</span></a></li>
                               @endforeach
                           @endif
                        </ul>
                      </div>
                      <div class="modal-footer">
                        @if($t!=null)
                        <a href="{{ url('test/'.$result->id . '?name=mistake') }}" class="btn btn-danger">მხოლოდ დაშვებული შეცდომების ნახვა</a>
                        @endif
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                      </div>
                    </div>
                  </div>
                </div>                

    			@foreach($tests as $key=>$q)
    				<div class="ticket">
    					<div class="questionHeader">
    							<span class="number">#{{ $q->id }}</span> 
    							<div class="title" >{{ $q->questions[0]->question  }} </div>  				 	
    							<button type="button" class="btn btn-primary description" data-toggle="modal" data-target="#exampleModal{{ $key }}">
    							  განმარტება
    							</button>

    							<div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    							  <div class="modal-dialog" role="document">
    							    <div class="modal-content">
    							      <div class="modal-header">
    							        <h5 class="modal-title" id="exampleModalLabel">{{$q->questions[0]->question }}</h5>
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
    					@foreach($q->options as $option)
                            @if($option->locale=='ka')
                        
    						<div class="info pull-right">
	    						<span>{{ $q->theme->name }}</span>							
    						</div>
    						<div style="clear: both;"></div>
    					 	<ul class="list-group">
    					 		
    							<li class="list-group-item" 
    							style="
    							@if( $answers[$key] ==$option->answer && $option->answer==1) 
    							background: #00c851; 
    							@elseif($option->answer==1 &&$answers[$key] !=1)
    							background: #00c851; 
    							@elseif($option->answer!=1 &&$answers[$key] ==1)
    							background: #ff3547; 

    							@endif" >{{  $option->option1 }}</li>


    							<li  class="list-group-item" style="@if( $answers[$key] ==$option->answer && $option->answer==2) 
    							background: #00c851; 
    							@elseif($option->answer==2 &&$answers[$key] !=2)
    							background: #00c851; 
    							@elseif($option->answer!=2 &&$answers[$key] ==2)
    							background: #ff3547; 

    							@endif ">{{  $option->option2}} </li>
    							
    							@if( !empty($option->option3))
    							<li  class="list-group-item" style="@if( $answers[$key] ==$option->answer && $option->answer==3) 
    							background: #00c851; 
    							@elseif($option->answer==3 &&$answers[$key] !=3)
    							background: #00c851; 
    							@elseif($option->answer!=3 &&$answers[$key] ==3)
    							background: #ff3547; 

    							@endif">{{  $option->option3 }} </li>
    							@endif
    							@if(!empty($option->option4))
    							<li  class="list-group-item" style="@if( $answers[$key] ==$option->answer && $option->answer==4) 
    							background: #00c851; 
    							@elseif($option->answer==4 &&$answers[$key] !=4)
    							background: #00c851; 
    							@elseif($option->answer!=4 &&$answers[$key] ==4)
    							background: #ff3547; 

    							@endif ">{{  $option->option4 }} </li>
    							@endif
    						</ul>
                            @endif
    					@endforeach
    				</div>

    			@endforeach
    			
    		</div>
    	</div>
    </div>

	</div>

<div class="" style="height: 100px;"></div>

@endsection
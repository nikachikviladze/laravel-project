@extends('master')
@section('title', 'გამოცდა')

@section('stylesheet')
    <link href="{{ asset('pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">

<style>
	.page-exam-area {
	    background-image: url({{ asset('images/static/exam.jpg') }}) !important;
	    padding: 228px 0 150px;
		padding-bottom: 50px;
	}
	.tipsbox{
		cursor: pointer;
	}	
	.ticket{
		display: none;
	}
	.customBtn{
		border: 1px solid silver;		
		font-size: 20px;
		margin-right: 5px;
		cursor: auto;
		background-color: #fff;
		border-radius: 0;
		display: inline-block;
		height: 37px;
		line-height: 35px;
		padding: 0 25px;
		text-transform: uppercase;
	}
	.btn{
		border: 1px solid silver;
	}
	.btn:active {
	  border-style: outset;
	}
	#quizz li:hover{
		background: #eeeeee;
	}
	#save{
		display: none;
	}
	._section:first-child{
		padding: 0!important;
	}
</style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />

@endsection
@section('slider')
<div class="page-exam-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>გამოცდა</h1>
				<ul>
					<li><a href="#">მთავარი</a></li>
					<li><span>გამოცდა</span></li>
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
<div class="examcontainer">
	<div class="exam_tips">
		@foreach($categories as $categorie)

			<div id="{{ $categorie->id }}" class="tipsbox @if($categorie->id == request()->group) selected @endif">
				<a href="{{ route('exem', ['group'=>$categorie->id]) }}" title="{{  $categorie->description }}">
					<div class="svg">
						 {{ svg_image($categorie->icon)->id('settings-icon')->dataFoo('bar')->dataBaz() }}

					</div>
					<span class="tiptitle">{{ $categorie->name }}</span>
				</a>
			</div>
		@endforeach
</div>



<div class="col-lg-12 text-center" style="margin:3rem 0;">
	<div class="row _s" >
		<h1 id="result"></h1>

		@if(request()->name=='hard')
			<p id="message" class="alert alert-success"> შეკითხების სირთულე განისაზღვრება დარეგისტრირებული მომხმარებლების მიერ გაცემული არასწორი პასუხების მიხედვით </p>
			<input type="hidden" value="1" id="hard">

		@else

			<p id="message" class="alert alert-success"> 
				@if($take !=null)თუ არ აირჩევთ ბილეთების თემას და შეკითხვების რაოდენობას, გამოციდის დაწყებისას მოვა  {{ $take }} შეკითხვა სხვადასხვა თემებიდან 
				@else აირჩიეთ სასურველი კატეგორია და დააჭირეთ გამოცდის დაწყებას
				@endif 
			</p>
			<input type="hidden" value="0" id="hard">

		@endif
		@if(request()->name!='hard')
			<a href="{{ url('exam?group='. request()->group . '&name=hard') }}" class="btn btn-primary" id="hardMessage">რთული ბილეთები თემიდან</a>

		@endif

		<button onClick="$('.timer').countimer('start');" class="btn btn-success center-block" id="btn1" style="background: #5cb85c;">გამოცდის დაწყება</button>

		@guest
		<a id="save" class="btn btn-default source" href="{{ url('register') }}">დარეგისტრირდი და შეინახე ტესტები</a>
		@else

		<button id="save" class="btn btn-default source" onclick="new PNotify({
		                title: 'ტესტის შედეგები შენახულია',
		                text: 'შეგიძლიათ იხილოთ პირად გვერდზე',
		                type: 'success',
		                hide: false,
		                styling: 'bootstrap3'
		            });">ტესტის შენახვა</button>
		@endguest
	</div>
 </div>

	@if(!request()->name)
		<div id="categories" style="margin: 10px 0;">
		 	<input style="margin-bottom: 10px;" type="number" class="form-control" id="number" min="1" max="1741" placeholder="ბილეთების რაოდენობა...">
		 	<p>აირჩიე სასურველი თემა:</p>
		 	@foreach($themes->chunk(16) as $t)
			 	<div class="col-lg-6 _section">
			 		@foreach($t as $theme)
			 			<div class="pretty p-default">
			 			    <input type="checkbox" class="theme custom-control-input"" value="{{ $theme->id }}">
			 			    <div class="state p-primary">
			 			        <label>{{ $theme->id }}. {{ $theme->name }} </label>
			 			    </div>
			 			</div>
			 			<br>
					@endforeach
			 	</div>
		 	@endforeach
		 </div>
	 @endif


		<div class="col-lg-8 col-md-offset-2">
			<div class="tickets_box" id="quizz"></div>
		</div>
		<div id="components" class="col-lg-10 col-md-offset-1" style="display: none; margin-bottom: 3rem;">
			<div>
	    		<span class=" customBtn" ><span id="curent">0</span>/<span id="all">0</span></span>
	    		<span id="cor" class=" customBtn" style=" color: #0f890f;">0</span>
	    		<span id="wrong" class=" customBtn" style=" color:red;"> 0</span>
	    		<span class="timer customBtn"></span>
	    		<button class="btn btn-primary pull-right" id="next">შემდეგი ბილეთი</button>
	    		<button class="btn btn-primary pull-right" id="last">ბოლოსთვის მოტოვება</button>				
			</div>
			
		</div>
    </div>
</div>
<div class="" style="height: 120px;"></div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="{{ asset('pnotify/dist/pnotify.js') }}"></script>
<script src="{{ asset('pnotify/dist/pnotify.buttons.js') }}"></script>
<script src="{{ asset('pnotify/dist/pnotify.nonblock.js') }}"></script>

<script src="{{ asset('js/ez.countimer.js') }}"></script>

<script type="text/javascript">
	i = 0;

    $( document ).ready(function() {
        $('.timer').countimer({
			autoStart : false
		});		
		


		$('#btn1').on('click',function(event) {
			click = 0;
			var hard = $('#hard').val();
			
			var cat = $(".selected").attr("id");


			var correctAnswer = 0;
			var wrongAnswer =0;
			var curent = 0;
			var number = $('#number').val();
			var locale ='{{ app()->getLocale() }}' ;

			$('#last').attr("disabled", false);
			
			$('#cor, #wrong, #curent').html(0);		
			$('#result').html('');
			$('#save, #message, #hardMessage').hide();

			var arr = [];
			var result =[];
			var userResult =[];
			$('.theme:checked').each(function () {
			    arr[i++] = $(this).val();
			});

			if(cat>0 ||cat<10)
			{

				$.ajax({
				    url : "{{ route('start') }}",
				    type : "get",
				    data: {cat:cat, arr:arr, number:number, hard:hard, locale:locale },
				    success : function(data) {
				    	$('#components').css('display', 'block');
				    	$('#btn1').css('display', 'none');
				    	$('#categories').css('display', 'none');
				    	if (number=='') {
				    		$('#all').html(data.count);
				    	}else{
				    		$('#all').html(data.count);
				    	}
				    	
				    	$('#quizz').show();
				    	content ='';

						$.each(data.results, function(index, val) {

							content += '<div class="ticket"><div class="questionHeader"><span class="number">'+val.questions[{{ $lang }}].question_id+'</span>'+val.questions[{{ $lang }}].question;
							if(val.image!=null)
							{
								content+= '<img src="{{ url('/tickets') }}/'+val.image+'" style="margin-bottom: 10px;">';
							}
							content+= '</div><ul class="list-group"><li class="list-group-item"  ans="'+val.options[0].answer+'" position="1"';
							if (val.options[0].answer == 1){
								content += 'data-corect-answer="true"';
							}
							content +='>'+val.options[{{ $lang }}].option1+'</li><li  class="list-group-item" ans="'+val.options[0].answer+'" position="2"';
							if (val.options[0].answer == 2){
								content += 'data-corect-answer="true"';		    		    		
							}
							content +='>'+val.options[{{ $lang }}].option2+'</li>';
							if(val.options[0].option3!=null)
							{
								content +='<li  class="list-group-item" ans="'+val.options[0].answer+'" position="3"';
								if(val.options[0].answer == 3)
								{
									content += 'data-corect-answer="true"';
								}
								content += '>'+val.options[{{ $lang }}].option3+'</li>';
							}
							if(val.options[0].option4!=null)
							{
								content +='<li  class="list-group-item" ans="'+val.options[0].answer+'" position="4"';
								if(val.options[0].answer == 4)
								{
									content += 'data-corect-answer="true"';
								}
								content += '>'+val.options[{{ $lang }}].option4+'</li>';
							}
							content+='</ul></div>';							
						});
						
						$('#quizz').html(content);
						// შემდგომი ბილეთის გამოჩენა

						var $curr = $( ".ticket:first-child" );
						$curr.css( "display", "block" );

						$('#quizz li').on('click',  function(event) {
							++click;
							var answer = $(this).attr('ans');
							var position  = $(this).attr('position');

							$('.ticket:nth-child('+click+')').find('number').html();

							userResult.push( {
							    ticket_id: $('.ticket:nth-child('+click+')').find('.number').html(),
							    position: position,
							});

							++curent;
							$('#curent').html(curent);

							if (answer==position) {
								++correctAnswer;

								$(this).addClass('bg-success');
								$(this).siblings('li').off('click');
								$(this).off('click');
								$('#cor').html(correctAnswer);
							}else{
								++wrongAnswer;

								userResult.push( {
								    wrongTicket:$('.ticket:nth-child('+click+')').find('.number').html(),
								    wrongPosition: position,
								});

								$(this).addClass('bg-danger');
								$(this).siblings('li[data-corect-answer="true"]').addClass('bg-success');
								$(this).siblings('li').off('click');
								$(this).off('click');
								$('#wrong').html(wrongAnswer);
							}
							$("#next").click(function() {
								$curr = $curr.next();
								$curr.prev().hide();
								$curr.css( "display", "block"  );
								$("#next").off('click');
								$('#last').attr("disabled", false);
							});
							$('#last').attr("disabled", true);
							if(data.count==curent){
								if (data.count<=100){
									$('#save').show();
								}
								$('.timer').countimer('stop');								
								if(correctAnswer<curent-3){
									window.setTimeout(function() {
										$('.tickets_box').hide();
										$('#result').html('თქვენ ვერ ჩააბარეთ გამოცდა სცადეთ თავიდან');
										$('#components').hide();
										$('#btn1,  #hardMessage').show();
										$('#categories').show();
										
									}, 1000);									
								}else{
									window.setTimeout(function() {
										$('.tickets_box').hide();
										$('#result').html('თქვენ ჩააბარეთ გამოცდა, გილოცავთ');
										$('#components').hide();
										$('#btn1, #hardMessage').show();
										$('#categories').show();
									}, 1000);									
								}
							}
						});
						if (data.count<=100) {
							$('#save').on('click', function(event) {
								var result = userResult;
								var correct = correctAnswer;
								var wrong = wrongAnswer;

								var time = $('.timer').html();


								$.ajax({
								    url : "{{ route('save') }}",
								    type : "get",
								    data: { result:result, cat:cat, time:time, correct:correct, wrong:wrong},
								    success : function(data1){
								    }									
								});

								$('#save').hide();
								window.setTimeout(function() {
									location.reload();
								}, 2000);	
							});							
						}
						$('#last').on('click',function() {
							++click;
							// ბილეთის ჩასმა ბოლოს
							$( $curr ).clone(true, true).appendTo( "#quizz" );
							// შემდგომ ბილეთზე გადასვლა
							$curr = $curr.next();
							$curr.prev().hide();
							$curr.css( "display", "block"  );
							// ბოლოს ჩასმული ბილეთისთვის ატრიბუტის
							$('.ticket:last-child').removeAttr('style');
						});
				    } 
				});				
			}			
		});
    });
</script>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
	#quizz li{
		cursor: pointer; padding: 5px 0; border: 1px solid silver;
	}
</style>
</head>
<body>
	<br>

	

<div class="container" id="quizz">
	ქულების რაოდენობა: <span id="qula"></span>
	<br>
	
	{{-- @foreach ($options as $option)
		<div>
			{{   $option->questions->id }}# {{ $option->questions->question }}
			 <br>
			 <hr>

			<li position="{{$option->correct_answer }}" ans="1"> {{ $option->option1 }} </li>
			<li position="{{$option->correct_answer }}" ans="2"> {{ $option->option2 }} </li>
			<li position="{{$option->correct_answer }}" ans="3"> {{ $option->option3 }} </li>
			<li position="{{$option->correct_answer }}" ans="4"> {{ $option->option4 }} </li>
		</div>
		 
		<br>
		<br>
	@endforeach
 --}}
 {{ $questions->links() }}

	 @foreach($questions as $q)

	 	#{{ $q->id }} {{ $q->question }}

	 	<a href="" class="btn btn success" style="border: 1px solid silver;">Edit</a>
	 	<hr>
		
		<br>
	 @endforeach
	{{ $questions->links() }}
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		$( document ).ready(function() {
		    var count = 0;

		    $('#quizz li').on('click',  function(event) {
		    	var answer = $(this).attr('ans');
		    	var position  = $(this).attr('position');

		    	// var that = this;
		    	if (answer==position) {
		    		count++;
		    		// $('#qula').html(currentQula+count);

		    		$(this).css('background', 'green');
		    		$(this).siblings().off('click');
		    		$(this).off('click');
		    		// if(count==2)
		    		// {
		    		// 	alert('loooooser');
		    		// }
		    		$("#qula").html(count);
		    	}else{

		    		$(this).css('background', 'red');
		    		$(this).siblings('li[data-corect-answer="true"]').css('background', 'green');
		    		$(this).siblings().off('click');
		    	}




		    });
		});

	</script>


	
</body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
         $( function() {
           $( "#tabs" ).tabs();
         } );
      </script>
   </head>
   <body >
      @php $next =  $question->id+1 @endphp
      <div class="container">
         <div class="row">
            <a class="btn btn-primary" style="float: right;" href="{{ url('quizz/'.  $next .'/edit') }}">შემდეგი ბილეთი </a>
            <h3>შეკითხვის დამატება</h3>
            @if(isset($question->image))
				<img src="{{ asset('tickets/'. $question->image) }}" width="400">
            @endif
            <div id="tabs">
               <ul>
                  @php 
                  $x=0; $k =0; $l=0; $j=0; $ll=0;
                  @endphp
                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li><a href="#tabs-{{ ++$x }}">{{ $properties['native'] }}</a></li>
                  @endforeach
               </ul>
               {{ Form::open(['action'=>['QuizzController@update', $question->id], 'method'=>'post']) }}
               {{ csrf_field() }}
               {{ form::hidden('_method', 'PUT') }}
               @foreach($question->questions as $key=> $q)
               <div id="tabs-{{ ++$k }}">
                  <div class="form-group">
                     <label>შეკითხვა ({{ $q->locale }})</label>
                     <input type="text" class="form-control" name="question[]" value="{{ $q->question }}">	
                  </div>
                  <div class="form-group">
                     <label>პასუხები ({{ $q->locale }})</label>
                     <div>				
                        <input type="text" class="form-control" name="option1[]" value="{{ $question->options[$key]->option1 }}">
                     </div>
                     <br>
                     <div>				
                        <input type="text" class="form-control" name="option2[]" value="{{ $question->options[$key]->option2 }}">
                     </div>
                     <br>
                     <div>				
                        <input type="text" class="form-control" name="option3[]" value="{{ $question->options[$key]->option3 }}">
                     </div>
                     <br>
                     <br>
                     <div>				
                        <input type="text" class="form-control" name="option4[]" value="{{ $question->options[$key]->option4 }}">
                     </div>
                     <br>

                  </div>
               </div>
               @endforeach

               <?php  $count= count(LaravelLocalization::getSupportedLocales())-count($question->questions); ?>
               @if($count!=0)

	               @for ($i=0; $i < $count; $i++)
		               <div id="tabs-{{ ++$k }}">
		                  <div class="form-group">
		                     <label>შეკითხვა </label>
		                     <input type="text" class="form-control" name="question[]" value="">	
		                  </div>
		                  <div class="form-group">
		                     <label>პასუხები </label>
		                     @for($s=1; $s<=4; $s++)
		                     <div>				
		                        <input type="text" class="form-control" name="option{{ $s }}[]" value="">
		                     </div>
		                     <br>
		                     @endfor		
		                  </div>
		               </div>
	               @endfor
               @endif
               @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
               	<input type="hidden" name="locale[]" value="{{ $localeCode }}">
               @endforeach
               <button type="submit" class="btn btn-success btn-block">გაგზავნა {{ count(LaravelLocalization::getSupportedLocales())-count($question->questions) }}</button>
               </form>

            </div>
         </div>
      </div>
   </body>
</html>
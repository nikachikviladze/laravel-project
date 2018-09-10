<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ url('css/select2.min.css') }}">
</head>
<body style="background: #a0a0a0;">


	<div class="container">
		<div class="row">
			<h3>შეკითხვის დამატება</h3>
		<form action="{{ route('c') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="form-group col-md-12">
				<label>თემა:</label>
				<select name="theme_id" class="form-control">
					@foreach($themes as $theme)
					<option value="{{ $theme->id }}">{{ $theme->name }} --- {{ $theme->id }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-md-12">
				<label>შეკითხვა</label>
				<input type="text" class="form-control" name="question">			
			</div>
			<div class="form-group col-md-9">
				<label>პასუხები</label>
				@for($i=1; $i<=4; $i++)
				<div>				
					<input placeholder="სავარაუდო პასუხი {{ $i }}" type="text" class="form-control" name="option{{ $i }}" >
				</div>
				<br>
				@endfor				
			</div>
			<div class="form-group col-md-3">
				<label>სწორი პასუხი</label>
				@for($i=1; $i<=4; $i++)
				<div>				
					<input style="margin-top: 12px;" type="radio" name="answer" value="{{ $i }}">{{ $i }}
				</div>
				<br>
				@endfor				
			</div>
			<div class="form-group col-md-12">
				<label>აღწერა:</label>
				<textarea name="description" class="form-control" cols="20" rows="5">აღწერა დაემატება უახლოეს პერიოდში</textarea>
			</div>

			<div class="form-group col-md-12">
	            <label>აირჩიე კატეგორია:</label>
	            <select name="categories[]" class="form-control select2-multi" multiple="multiple">
	             @foreach($categories as $categorie)
	             <option value="{{ $categorie->id }}" selected>{{ $categorie->name }}</option>
	             @endforeach
	           </select>
	        </div>
	        <div class="form-group col-md-12">
				<input type="file" name="image">
	        </div>
	        <div class="form-group col-md-12">
				<button type="submit" class="btn btn-success btn-block">გაგზავნა</button>
	        </div>

		</form>
		</div>

	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="{{ url('js/select2.min.js') }}"></script>
	<script>
	  $('.select2-multi').select2();
	</script>

</body>
</html>




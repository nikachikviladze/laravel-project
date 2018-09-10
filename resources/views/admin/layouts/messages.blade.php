@if(Session::has('success'))
<div class="alert alert-success">
	<strong>{{ session::get('success') }}</strong>
</div>
@endif

@if(session('warning'))

<div class="alert alert-warning">
	 {{ session('warning') }}
</div>
@endif


@if(session('error'))

<div class="alert alert-danger">
	 {{ session('error') }}
</div>
@endif



@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div style="width: 97%;  margin: auto;    padding-top: 50px;">
			<div class="alert alert-danger">
			   {{ $error }}
			</div>
		</div>
	@endforeach
@endif

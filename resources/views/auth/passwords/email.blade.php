@extends('auth.layouts')
@section('title', 'პაროლის აღდგენა')

@section('content')

  <form method="POST" action="{{ route('password.email') }}" class="col s-12">
  @csrf
  <h3 style="font-size: 25px;font-weight: 700;">პაროლის აღდგენის ლინკის მიღება</h3>

      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
    <div class="row">
      <div class="input-field col s12">
        <input name="email" id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  required autofocus>
        <label for="email" class="">მეილი</label>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong class="m">{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
                
      </div>

      <div class="input-field col s6">
        <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">პაროლის აღდგენა
          <i class="material-icons right">done</i>
        </button>
      </div>
    </div>
  </form>
</div>
<a href="{{ url('register') }}" title="რეგისტრაცია" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>

@endsection


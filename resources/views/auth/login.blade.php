@extends('auth.layouts')
@section('title', 'ავტორიზაცია')
@section('content')

  <form method="POST" action="{{ route('login') }}" class="col s-12">
  @csrf
  <h3 style="font-size: 25px;font-weight: 700;">ავტორიზაცია</h3>
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
      <div class="input-field col s12">
        <input name="password" id="password" type="password" class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}" minlength="6" required="">
        <label for="password">პაროლი</label>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong class="m">{{ $errors->first('password') }}</strong>
                </span>
            @endif
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
          <a href="{{ route('password.request') }}">
              დაგავიწყდა პაროლი?
          </a>
            
      </div>


      <div class="input-field col s6">
        <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">ავტორიზაცია
          <i class="material-icons right">done</i>
        </button>
      </div>
    </div>
  </form>
</div>
<a href="{{ url('register') }}" title="რეგისტრაცია" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>

@endsection

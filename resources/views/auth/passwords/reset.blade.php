@extends('auth.layouts')
@section('title', 'პაროლის აღდგენა')

@section('content')

  <form method="POST" action="{{ route('password.request') }}" class="col s-12">
  @csrf
  <input type="hidden" name="token" value="{{ $token }}">
  <h3 style="font-size: 25px;font-weight: 700;">პაროლის აღდგენა</h3>
      <div style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;">@include('layouts.message')</div>
    
    <div class="row">
      <div class="input-field col s12">
        <input name="email" id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $email ?? old('email') }}"  required>
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
      <div class="input-field col s12">
        <input name="password_confirmation" id="password_confirmation" type="password" class="validate" minlength="6" required>
        <label for="password_confirmation">გაიმეორეთ პაროლი</label>
      </div>
    </div>

    <div class="row">

      <div class="input-field col s12">
        <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">პაროლის აღდგენა
          <i class="material-icons right">done</i>
        </button>
      </div>
    </div>
  </form>
</div>

@endsection

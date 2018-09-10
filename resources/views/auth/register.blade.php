@extends('auth.layouts')
@section('title', 'რეგისტრაცია')

@section('content')

  <form method="POST" action="{{ route('register') }}" class="col s-12">
  @csrf
  <h3 style="font-size: 25px;font-weight: 700;">რეგისტრაცია</h3>
      <div style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;">@include('layouts.message')</div>
    <div class="row">
      <div class="input-field col s12">

        <input name="name" id="first_name" type="text" class="validate {{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required>
        <label for="first_name" class="">სახელი</label>
        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong class="m">{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>        
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name="email" id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  required>
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
      <div class="input-field col s6">
        <div class="gender-male">
          <input class="with-gap" name="gender" type="radio" id="male" required value="1">
          <label for="male">კაცი</label>
        </div>
        <div class="gender-female">
          <input class="with-gap" name="gender" type="radio" id="female" required value="2">
          <label for="female">ქალი</label>
        </div>
      </div>

      <div class="input-field col s6">
        <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">რეგისტრაცია
          <i class="material-icons right">done</i>
        </button>
      </div>
    </div>
  </form>
</div>
<a href="{{ url('login') }}" title="ავტორიზაცია" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>

@endsection
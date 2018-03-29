@extends('layouts.site')
@section('content')
<div class="container">
  <div class="columns is-centered">
    <div class="column is-one-third m-t-80">
      <div class="content">
        <figure>
          <img src="{{asset('images/logo-square.png')}}" alt="Yico Logo" class="image is-128x128" >
        </figure>
        <form class="form-horizontal m-r-15 m-l-15" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
          <div class="field">
            <div class="control">
              <input class="input is-rounded {{ $errors->has('email') ? ' is-danger' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="請輸入您的電子信箱" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="field">
            <div class="control">
              <input class="input is-rounded {{ $errors->has('password') ? ' is-danger' : '' }}" id="password" type="password" name="password" placeholder="請輸入您的密碼密碼" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="field">
            <div class="control">
              <label class="checkbox">
                <input type="checkbox">
                記住我
              </label>
            </div>
          </div>
          <hr>
          <div class="field is-grouped is-grouped-right">
            <div class="control">
              <button class="button is-primary p-l-50 p-r-50">登入</button>
            </div>
            <div class="control">
              <a href="{{ route('password.request') }}" class="button is-text">忘記密碼？</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.site')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-two-thirds m-t-80">
            <div class="card">
                <div class="card-content">

                    <h1 class="is-1">註冊使用者</h1>

                    <form class="form-horizontal m-r-15 m-l-15" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">姓氏</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="firstName" type="text" class="input" name="firstName" value="{{ old('firstName') }}" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('firstName'))
                              <p class="help">{{ $errors->first('firstName') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">名</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="lastName" type="text" class="input" name="lastName" value="{{ old('lastName') }}" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('lastName'))
                              <p class="help">{{ $errors->first('lastName') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">使用者名稱</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('name'))
                              <p class="help">{{ $errors->first('name') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">公司電子信箱</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
                                </p>
                              </div>
                              @if ($errors->has('email'))
                              <p class="help">{{ $errors->first('email') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">密碼</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="password" type="password" class="input" name="password" required>
                                </p>
                              </div>
                              @if ($errors->has('password'))
                              <p class="help">{{ $errors->first('password') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">確認密碼</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="password-confirm" type="password" class="input" name="password-confirm" required>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <!-- Left empty for spacing -->
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="control">
                                <button class="button is-primary">
                                  註冊
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

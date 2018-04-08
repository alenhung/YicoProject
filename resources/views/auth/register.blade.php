@extends('layouts.site')
@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-two-thirds m-t-20">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">註冊使用者</h1>
                    <hr>
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
                                  <input id="firstName" type="text" class="input" name="firstName" value="{{ old('firstName') }}" placeholder="請輸入您的姓氏" required autofocus>
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
                                  <input id="lastName" type="text" class="input" name="lastName" value="{{ old('lastName') }}" placeholder="請輸入您的大名" required autofocus>
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
                                  <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" placeholder="請輸入您的使用者名稱（限英文）" required autofocus>
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
                            <label class="label">隸屬公司</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="companyName" type="text" class="input" name="companyName" value="{{ old('companyName') }}" placeholder="公司名稱 EX:益州化學工業" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('companyName'))
                              <p class="help">{{ $errors->first('companyName') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">部門</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="department" type="text" class="input" name="department" value="{{ old('department') }}" placeholder="部門別" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('department'))
                              <p class="help">{{ $errors->first('department') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">職稱</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="jobTitle" type="text" class="input" name="jobTitle" value="{{ old('jobTitle') }}" placeholder="職稱" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('jobTitle'))
                              <p class="help">{{ $errors->first('jobTitle') }}</p>
                              @endif
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="field is-horizontal">
                          <div class="field-label">
                            <label class="label">分機號碼</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <div class="field">
                                <p class="control">
                                  <input id="extTel" type="number" class="input" name="extTel" value="{{ old('extTel') }}" placeholder="分機號碼 EX:121" required autofocus>
                                </p>
                              </div>
                              @if ($errors->has('extTel'))
                              <p class="help">{{ $errors->first('extTel') }}</p>
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
                                  <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" placeholder="@yico.com.tw" required>
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
                                  <input id="password" type="password" class="input" name="password" placeholder="建議至少包含英文及數字" required>
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
                                  <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="請再輸入一次您的密碼" required>
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

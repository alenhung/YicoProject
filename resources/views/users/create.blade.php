@extends('layouts.app')
@section('sidebar')
  @include('_includes.nav.home-side')
@endsection
@section('content')
<div class="flex-container">
  <div class="columns">
    <div class="column">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
          @include('shared._errors')
      @endif
      <!--content-start-->
      <div class="card">
        <div class="card-content">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <h4 class="title is-4"><i class="fa fa-plus m-r-10" aria-hidden="true"></i>新增使用者</h4>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <h6 class="subtitle is-6"></h6>
              </div>
            </div>
          </div>
          <hr>
          <form class="form-horizontal m-r-15 m-l-15" method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}">
            {{ csrf_field() }}
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">姓氏</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="firstName" type="text" class="input" name="firstName" value="{{ old('firstName') }}" placeholder="請輸入您的姓氏" required autofocus>
                      </div>
                      @if ($errors->has('firstName'))
                      <div class="help">{{ $errors->first('firstName') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">名</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="lastName" type="text" class="input" name="lastName" value="{{ old('lastName') }}" placeholder="請輸入您的大名" required autofocus>
                      </div>
                      @if ($errors->has('lastName'))
                      <div class="help">{{ $errors->first('lastName') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">使用者名稱</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" placeholder="請輸入您的使用者名稱（限英文）" required autofocus>
                      </div>
                      @if ($errors->has('name'))
                      <div class="help">{{ $errors->first('name') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">隸屬公司</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="companyName" type="text" class="input" name="companyName" value="{{ old('companyName') }}" placeholder="公司名稱 EX:益州化學工業" required autofocus>
                      </div>
                      @if ($errors->has('companyName'))
                      <div class="help">{{ $errors->first('companyName') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">部門</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="department" type="text" class="input" name="department" value="{{ old('department') }}" placeholder="部門別" required autofocus>
                      </div>
                      @if ($errors->has('department'))
                      <div class="help">{{ $errors->first('department') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">職稱</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="jobTitle" type="text" class="input" name="jobTitle" value="{{ old('jobTitle') }}" placeholder="職稱" required autofocus>
                      </div>
                      @if ($errors->has('jobTitle'))
                      <div class="help">{{ $errors->first('jobTitle') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">分機號碼</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="extTel" type="tel" class="input" name="extTel" value="{{ old('extTel') }}" placeholder="分機號碼 EX:121" required autofocus>
                      </div>
                      @if ($errors->has('extTel'))
                      <div class="help">{{ $errors->first('extTel') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">電子信箱</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" placeholder="@yico.com.tw" required>
                      </div>
                      @if ($errors->has('email'))
                      <div class="help">{{ $errors->first('email') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">密碼</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="password" type="password" class="input" name="password" placeholder="建議至少包含英文及數字" required>
                      </div>
                      @if ($errors->has('password'))
                      <div class="help">{{ $errors->first('password') }}</div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">確認密碼</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="請再輸入一次您的密碼" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">權限群組</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <div class="select {{ $errors->has('PermissionGroup') ? ' is-danger' : '' }}">
                          <select name="PermissionGroup">
                            <option value="">請選擇權限群組</option>
                            <option value="PGCompany">公司群組</option>
                            <option value="PGAdmin">管理者群組</option>
                            <option value="PGGuest">瀏覽者群組</option>
                          </select>
                        </div>

                      </div>
                      @if ($errors->has('PermissionGroup'))
                          <div class="help-block">
                              {{ $errors->first('PermissionGroup') }}
                          </div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
              <div class="column">
                <!---->
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">權限分級</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <div class="select {{ $errors->has('PermissionLevel') ? ' is-danger' : '' }}">
                          <select name="PermissionLevel">
                            <option value="">請選擇權限分級</option>
                            <option value="PGAmin">總管理者</option>
                            <option value="PGWriter">一般使用者</option>
                            <option value="PGGuest">閱覽權限</option>
                          </select>
                        </div>

                      </div>
                      @if ($errors->has('PermissionLevel'))
                          <div class="help-block">
                              {{ $errors->first('PermissionLevel') }}
                          </div>
                      @endif
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <hr>
                <div class="level">
                  <div class="level-left">
                    <div class="level-item">
                    </div>
                  </div>
                  <div class="level-right">
                    <div class="level-item">
                      <button class="button is-primary is-right">新增使用者</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--content-end-->
    </div>
  </div>
</div>
@endsection

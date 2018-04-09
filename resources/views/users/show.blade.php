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

      @endif
      <!--content-start-->
      <div class="card">
        <div class="card-content">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <h4 class="title is-4"><i class="fa fa-edit m-r-10" aria-hidden="true"></i> 使用者資訊</h4>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <a class="button is-primary is-left" href="{{route('users.edit', $user->id)}}">修改資料</a>
              </div>
            </div>
          </div>
          <hr>
          <div class="content">
            <h3>{{$user->firstName}}{{$user->lastName}} - 詳細註冊資訊</h3>
            <div class="columns">
              <div class="column is-one-third">
                <figure>
                  <img src="http://fakeimg.pl/250x250" alt="" class="img-circle border-whitesmoke has-shadow">
                </figure>
              </div>
              <div class="column ">
                <table class="table is-striped is-hoverable is-fullwidth">
                  <thead>
                    <tr>
                      <th class="has-text-centered">項次</th>
                      <th class="has-text-centered">項目</th>
                      <th class="has-text-centered">內容</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="has-text-centered">1</td>
                      <td class="has-text-right p-l-30">姓氏：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->firstName}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">2</td>
                      <td class="has-text-right p-l-30">名：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->lastName}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">3</td>
                      <td class="has-text-right p-l-30">使用者名稱：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->name}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">4</td>
                      <td class="has-text-right p-l-30">隸屬公司：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->companyName}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">5</td>
                      <td class="has-text-right p-l-30">部門：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->department}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">6</td>
                      <td class="has-text-right p-l-30">職稱：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->jobTitle}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">7</td>
                      <td class="has-text-right p-l-30">分機號碼：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->extTel}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">8</td>
                      <td class="has-text-right p-l-30">電子信箱：</td>
                      <td class="has-text-weight-bold p-r-40"><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">9</td>
                      <td class="has-text-right p-l-30">權限群組：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->PermissionGroup}}</td>
                    </tr>
                    <tr>
                      <td class="has-text-centered">10</td>
                      <td class="has-text-right p-l-30">權限分級：</td>
                      <td class="has-text-weight-bold p-r-40">{{$user->PermissionLevel}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <hr>
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                {{-- something at left --}}
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <a class="button is-primary is-right" href="{{route('users.index')}}">返回使用者列表</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--content-end-->
    </div>
  </div>
</div>
@endsection

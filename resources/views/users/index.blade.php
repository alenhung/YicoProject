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

      <div class="card">
        <div class="card-content">
          <p class="title">
            使用者管理
          </p>
          <p class="subtitle">
            GRUD
          </p>
          <hr/>
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th class="has-text-centered">系統序號</th>
                <th class="has-text-centered">使用者</th>
                <th class="has-text-centered">所屬公司</th>
                <th class="has-text-centered">部門</th>
                <th class="has-text-centered">職稱</th>
                <th class="has-text-centered">分機號碼</th>
                <th class="has-text-centered">檢視/編輯</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th class="has-text-centered">{{$user->id}}</th>
                  <td class="has-text-centered">{{$user->firstName}} {{$user->lastName}} </td>
                  <td class="has-text-centered">{{$user->companyName}}</td>
                  <td class="has-text-centered">{{$user->department}}</td>
                  <td class="has-text-centered">{{$user->jobTitle}}</td>
                  <td class="has-text-centered">{{$user->extTel}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">詳細內容</a><a class="button is-light" href="{{route('users.edit', $user->id)}}">修改</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <footer class="card-footer">
          <p class="card-footer-item">
            <span>
              如果您有相關問題或改善建議，請透過<a href="https://twitter.com/codinghorror/status/506010907021828096"> 聯絡我們 </a>提出問題
            </span>
          </p>

        </footer>
      </div>

    </div>
  </div>
</div>
@endsection

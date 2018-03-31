@extends('layouts.app')
@section('sidebar')
  @include('_includes.nav.home-side')
@endsection
@section('content')
<div class="container">
  <div class="columns">
    <div class="column">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <h1>Welcome to Yico System</h1>
    </div>
  </div>
</div>
@endsection

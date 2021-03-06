<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @if (Auth::guest())
    @else
    <div id="app">
      @include('_includes.nav.main')
      <div class="container is-fluid">
        <div class="columns">
          <div class="column is-narrow is-2">
            @section('sidebar')
                <p>側邊欄 sidebar</p>
            @show
          </div>
          <div id="content" class="column is-10 m-t-20 m-b-20">
            @yield('content')
          </div>
        </div>
    @endif
    @include('_includes.footer.main')
    </div>
  </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>

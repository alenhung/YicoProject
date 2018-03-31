<nav class="navbar is-fixed-top has-shadow" role="navigation" aria-label="main navigation">
  <div class="container is-fluid">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{ route('index') }}">
        <img src="{{asset('images/logo.png')}}" alt="Yico">
      </a>
      <button class="button navbar-burger" v-on:click="openMenu" v-bind:class="{ 'is-active': isActive,'is-active2': isActive2}">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="navbar-menu" v-bind:class="{ 'is-active': isActive,'mobileNav': isActive2 }">
      <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">公文管理</a>
          <div class="navbar-dropdown">
            <a class="navbar-item">
              <span class="icon">
                <i class="fa fa-list m-r-10"></i>
              </span>
              申請紀錄
            </a>
            {{-- <a href="{{route('document.create')}} --}}
            <a href="#
            " class="navbar-item">
              <span class="icon">
                <i class="fa fa-plus m-r-10"></i>
              </span>
              文號申請
            </a>
            <a class="navbar-item">
              <span class="icon">
                <i class="fa fa-tasks m-r-10"></i>
              </span>
              進度查詢
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">Docs</a>
          <div class="navbar-dropdown">
            <a class="navbar-item">Overview</a>
            <a class="navbar-item">Elements</a>
            <a class="navbar-item">Components</a>
            <hr class="navbar-divider">
            <div class="navbar-item">Version 0.6.2</div>
          </div>
        </div>
      </div>
      <div class="navbar-end">
        <!-- navbar items -->
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">嗨！ {{ Auth::user()->name }}</a>

          <div class="navbar-item navbar-dropdown is-right">
            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="navbar-item">
              <span class="icon">
                <i class="fa fa-fw fa-sign-out m-r-5"></i>
              </span>
                登出
            </a>
          </div>
        </div>
        @include('_includes.forms.logout')
      </div>
    </div>
  </div>
</nav>

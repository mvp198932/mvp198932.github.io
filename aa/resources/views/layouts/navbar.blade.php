<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active" >
          <a class=" nav-link " href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class=" nav-link" href="{{route('posts.index')}}">最新公告</a> {{--  直接幫你連路由  --}}
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="#">個人作品集</a>
        </li> 
        @guest 
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">[登入]</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">[註冊]</a>
        </li> 
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{auth()->user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            [ 登出 ]
        </a>  
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-item nav-link" href="{{route('logout')}}">[登出]</a> //用get 在web改get
        </li>  --}}
  
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      
        @endauth
      </ul>
    </div>
  </nav>
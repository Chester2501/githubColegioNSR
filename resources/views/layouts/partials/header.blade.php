<header>
  
  
    <h1>Coder Frieds</h1>
  <nav>
    <ul>
      <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a>  
      </li>
       <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active':''}}">Cursos</a>
      </li>
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a> </li>
        <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active':''}}">Contactanos</a> </li>
        <li><a href="{{route('welcome')}}" class="{{request()->routeIs('welcome') ? 'active':''}}">Welcome</a> </li>
        <li><a href="{{route('posts.index')}}" class="{{request()->routeIs('posts.index') ? 'active':''}}">Post</a> </li>
    </ul>
  </nav>
</header>
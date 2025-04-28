<ul class="navbar-nav text-white">
    @if (Auth::guest())
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('logoff')}}">Logoff</a>
        </li>
    @endif
    </ul>
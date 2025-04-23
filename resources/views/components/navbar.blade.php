<div class="terminal-nav">
    <div class="terminal-logo">
        <div class="logo terminal-prompt"><a href="{{ route('homepage') }}" class="no-style">Blackbox</a></div>
    </div>
    <nav class="terminal-menu">
        <ul>
            <li>
                <a class="menu-item active" href="{{ route('homepage') }}">Homepage</a>
            </li>
            <li>
                <a class="menu-item" href="{{ route('rules') }}">Rules</a>
            </li>
            @guest
            <li>
                <a class="menu-item" href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a class="menu-item" href="{{ route('register') }}">Register</a>
            </li>
            @endguest
            @auth
            <li>
                <a class="menu-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a>
                <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
                </form>
            </li>
            @endauth
        </ul>
    </nav>
</div>

<header>
    <ul class="topbar-title">
        <li>
            <a href="{{ route('index') }}"><h1>Cryptopow</h1></a>
        </li>
    </ul>
    <nav>
        <ul class="topbar-link">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('watchlist') }}">Watchlist</a></li>
            {{-- <li><a href="{{ route('help') }}">Help</a></li> --}}
        </ul>
    </nav>
    <ul class="topbar-account">
        <form action="" method="post">
            <button class="btn" type="button"><i class="fa-solid fa-user-large"></i> guest</button>
        </form>
    </ul>
</header>
<header>
    <ul class="topbar-title">
        <li>
            <a href="{{ route('index') }}"><h1>Cryptopow</h1></a>
        </li>
    </ul>
    <nav>
        <ul class="topbar-link">
            <li><a href="./about.php#top">About</a></li>
            <li><a href="./watchlist.php#top">Watchlist</a></li>
            <li><a href="./help.php#top">Help</a></li>
        </ul>
    </nav>
    <ul class="topbar-account">
        <li>' . user($isLogged, $balance) . '</li>
    </ul>
</header>
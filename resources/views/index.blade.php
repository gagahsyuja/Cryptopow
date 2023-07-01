<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptopow - Home</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" href="./img/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    </head>
    <body>
        {{-- topbar.php --}}
        <div class="recommend-outside" id="popup">
            <div class="recommend" id="popup-1">
                {{-- logout.php --}}
            </div>
        </div>
        <img src="./img/banner.png" alt="banner" width="100%">
        <div id="buy"></div>
        <div id="buy-popup">
            <div class="buy-popup">
                <i class="fa-solid fa-circle-check fa-5x"></i>
                <br><br><br>
                <button id="buy-popup-close"><h2>Done</h2></button>
            </div>
        </div>
        <div id="search-content"></div>
            {{-- index.php --}}
        <div class="navbar">
            <div class="navbar-menu">

                @foreach ($algos as $algo)

                    <a href="#{{ $algo -> name }}">{{ ucwords($algo -> name) }}</a>

                @endforeach

            </div>
        </div>
        @foreach ($algos as $algo)

            @if ($loop -> first)

                <div id="{{ $algo -> name }}" style="height: 100px;"></div>
                <div class="contents">
                <br>

            @else

                <div id="{{ $algo -> name }}" style="height: 120px;"></div>

            @endif

            <h1 class="link">{{ ucwords($algo -> name) }}</h1>
            <br>
            <hr style="margin-left: 1.5%; margin-right: 1.5%; border: 1px solid #fabd2f;">
            <br>
            <table class="table-home">
                <tr class="table-coin-name">            

                @php
                    $i = 0;
                @endphp

                @foreach ($coins -> where('algo', $algo -> name) as $coin)

                    <td><h3>{{ $coin -> name }}</h3></td>
                    @php
                        $i++;
                    @endphp

                @endforeach

                @while ($i % 3 != 0)
                    <td></td>
                    @php
                        $i++;
                    @endphp
                @endwhile


                </tr>
                <tr class="table-logo">

                @foreach ($coins -> where('algo', $algo -> name) as $coin)

                    <td>
                        <a href="{{ route('show', $coin -> short_name) }}">
                            <img src="{{ $coin -> image_url }}" alt="Image of {{ $coin -> name }}" width="18%">
                        </a>
                    </td>
                        
                @endforeach

                </tr>
            </table>

        @endforeach

        </div>

    <br><br><br><br>
    <div class="botbar">
        <h1><span>&#169;2022</span>Cryptopow</h1>
        <div class="botbar-img">
            <img src="./img/logo.png" alt="logo" width="15%">
        </div>
        <div class="botbar-social">
            <a href="https://github.com/gagahsyuja" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://instagram.com/gagahsyuja__" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/gagah.s.abdullah" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>
    <script>
		
        let popup = document.getElementById("popup");
        let popup1 = document.getElementById("popup-1");

        function closePopup()
        {
            popup.style.display = 'none';
            popup1.style.display = 'none';
            window.location = './index.php';
        }

    </script>
    </body>
</html>
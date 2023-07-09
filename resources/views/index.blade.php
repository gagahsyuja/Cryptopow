@extends('layouts.app', ['title' => 'Home'])

@section('contents')
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
                <tr class="wish-box">
                    <form action="/store" method="post">
                        @csrf
                        @foreach ($coins -> where('algo', $algo -> name) as $coin)
                        <td>
                            @if (!$watchlist -> where('short_name', $coin -> short_name) -> exists())
                            <button type="submit" class="btnCoin" name="coin" value="{{ $coin -> short_name }}"><i class="fa-regular fa-eye fa-2x"></i></button>
                            @else
                            <button type="submit" class="btnCoin" name="coin" value="{{ $coin -> short_name }}"><i class="fa-sharp fa-solid fa-eye fa-2x"></i></button>
                            @endif
                        </td>
                        @endforeach
                    </form>
                </tr>
            </table>

        @endforeach

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

@endsection
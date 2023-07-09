@extends('layouts.app', ['title' => 'Watchlist'])

@section('contents')

<div class="about-watchlist">

    @if ($exist)
    <br><br>
    <h1><strong>Watchlist</strong></h1>
    <br><br>

    @foreach ($watches as $watch)
    
    <div id="{{ $watch -> short_name }}">
        <div class="watchlist-outside">
            <table>
                <tr>
                    <td class="watchlist-outside-image">
                        <img
                            class="watchlist-image"
                            src="{{ $watch -> image_url }}"
                            width="50%" alt=""
                        >
                    </td>
                    <td>
                        <a href="/coin/{{ $watch -> short_name }}" target="_blank"><h2>{{ $watch -> name }}</h2></a>
                    </td>
                    <td>
                        <h3>Rp<span id="{{ $watch -> short_name }}Price"></span><br><span id="{{ $watch -> short_name }}Percent"></span></h3>
                    <td>
                        <div class="watchlist-button">
                            <form id="form-remove" method="post" action="/store">
                                @csrf
                                <button type="submit" class="remove" name="coin" value="{{ $watch -> short_name }}"><i class="fa-solid fa-trash fa-2x"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
    </div>

    @endforeach

    @else

    <br><br><br><br>
    <h1><strong>Empty Watchlist</strong></h1>
    <br><br>

    @endif

    <br><br><br><br>
</div>

@php 

echo '<script>';

foreach ($watches as $watch)
{
    echo '
        var ' . $watch -> short_name . 'Percent = document.getElementById("' . $watch -> short_name . 'Percent");
        var ' . $watch -> short_name . 'Price = document.getElementById("' . $watch -> short_name . 'Price");
    ';
}

echo '
    const liveprice = {
                "async": true,
                "scroosDomain": true,
                "url": "https://indodax.com/api/summaries/",
                "method": "GET",
                "headers": {}
    }
';

foreach ($watches as $watch)
{
    echo '
        $.ajax(liveprice).done(function (response) {
                
            var last = response.tickers.' . $watch -> short_name . '_idr.last;
            var yest = response.prices_24h.' . $watch -> short_name . 'idr;
            var percent = last * 100 / yest;

            ' . $watch -> short_name . 'Price.innerHTML = last;
        
            if (percent > 100)
            {
                percent -= 100;
                
                ' . $watch -> short_name . 'Percent.innerHTML = "<span style=\'color: #b8bb26;\'><i class=\'fa-solid fa-caret-up\'></i> " + percent.toFixed(2) + "%</span>";
            }
        
            else
            {
                percent = 100 - percent;

                ' . $watch -> short_name . 'Percent.innerHTML = "<span style=\'color: #fb4934;\'><i class=\'fa-solid fa-caret-down\'></i> " + percent.toFixed(2) + "%</span>";
            }
        
        })
    ';
}

echo '</script>';

@endphp

@endsection
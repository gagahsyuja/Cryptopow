@extends('layouts.app', ['title' => $coins -> name])

@section('contents')

    <div class="recommend-outside" id="popup">
        <div class="recommend" id="popup-1">

            {{-- logout.php --}}
        </div>
    </div>
    <br><br>
    <div class="box">
        <br><br>
        <h3 class="title">{{ $coins -> name }}<br>({{ strtoupper($coins -> short_name) }})</h3>
        <h3 class="title-button">
            <form action="/store" method="POST">
                @csrf

                @if (!$exist)
                    <button class="btnCoin" name="coin" value="{{ $coins -> short_name }}" style="cursor: pointer;"><i class="fa-regular fa-eye fa-2x"></i></button>
                @else
                    <button class="btnCoin" name="coin" value="{{ $coins -> short_name }}" style="cursor: pointer;"><i class="fa-sharp fa-solid fa-eye fa-2x"></i></button>
                @endif
            </form>
        </h3>

        <img class="image" src="{{ $coins -> image_url }}" alt="image of {{ $coins -> name }}" width="18%">
        <br>
        <table class="details">
            <tr>
                <td class="details-link-title"><h3>Price</h3></td>
                <td class="details-link">
                    Rp<span id="{{ $coins -> short_name }}Price" style="color: #3c3836"></span>
                    <span id="{{ $coins -> short_name }}Percent"></span>
                </td>
            </tr>
            <tr>
                <td class="details-link-title"><h3>Algorithm</h3></td>
                <td class="details-link">
                    <a href="{{ $algo -> about }}" target="_blank">{{ ucwords($coins -> algo) }}</a>
                </td>
            </tr>
            <tr>
                <td class="details-link-title"><h3>Pools</h3></td>
                <td class="details-link">
                    @foreach ($pools as $pool)
                    <a href="{{ $pool -> site }}" target="_blank">{{ $pool -> name }}</a>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td class="details-link-title"><h3>Miners</h3></td>
                <td class="details-link">
                    @foreach ($miners as $miner)
                    <a href="{{ $miner -> source }}" target="_blank">{{ $miner -> name }}</a>
                    @endforeach
                </td>
            </tr>
        </table>
    </div>

<script>
    
    let popup = document.getElementById("popup");
    let popup1 = document.getElementById("popup-1");

    function closePopup()
    {
        popup.style.display = "none";
        popup1.style.display = "none";
        window.location = "./coin.php?coin=' . $short . '";
    }

</script>
<script>

    var {{ $short }}Percent = document.getElementById("{{ $short }}Percent");
    var {{ $short }}Price = document.getElementById("{{ $short }}Price");

    var liveprice = {
        "async": true,
        "scroosDomain": true,
        "url": "https://indodax.com/api/summaries/",
        "method": "GET",
        "headers": {}
    }
    
    $.ajax(liveprice).done(function (response) {
    
        var last = response.tickers.{{ $short }}_idr.last;
        var yest = response.prices_24h.{{ $short }}idr;
        var percent = last * 100 / yest;

        {{ $short }}Price.innerHTML = last;
    
        if (percent > 100)
        {
            percent -= 100;
            
            {{ $short }}Percent.innerHTML = "<span style=\'color: #b8bb26; text-shadow: 2px 2px 5px #282828;\'><i class=\'fa-solid fa-caret-up\'></i> " + percent.toFixed(2) + "%</span>";
        }
    
        else
        {
            percent = 100 - percent;

            {{ $short }}Percent.innerHTML = "<span style=\'color: #9d0006; text-shadow: 2px 2px 5px #3c3836;\'><i class=\'fa-solid fa-caret-down\'></i> " + percent.toFixed(2) + "%</span>";
        }
    
    })

</script>
<script>

    // $(document).ready(function()
    // {
    //     $("#submitButton").on("click", function()
    //     {
    //         alert('hello')
    //     })
    // })

</script>

@endsection
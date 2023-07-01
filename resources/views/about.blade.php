@extends('layouts.app', ['title' => 'About'])

@section('contents')

<div class="recommend-outside" id="popup">
    <div class="recommend" id="popup-1">
        {{-- <?php include './php/logout.php'; ?> --}}
    </div>
</div>
<div class="about">
    <br>
    <h1><strong>About Me</strong></h1>
    <!-- <p>I use linux btw</p> -->
    <br><br>
    <div class="aboutme">
        <div class="user">
            <i class="fa-solid fa-user"></i><p>Gagah Syuja</p>
        </div>
        <br><br>
        <div class="nim">
            <i class="fa-solid fa-id-card-clip"></i><p>A11.2022.14259</p>
        </div>
        <br><br>
        <div class="group">
            <i class="fa-solid fa-people-group"></i><p>A11.4107</p>
        </div>
    </div>
    <br><br>
    <div class="social">
        <a href="https://github.com/gagahsyuja" target="_blank"><i class="fa-brands fa-square-github"></i></a>
        <a href="https://instagram.com/gagahsyuja__" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="https://www.facebook.com/gagah.s.abdullah" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
    </div>
    <br><br><br>
</div>

@endsection
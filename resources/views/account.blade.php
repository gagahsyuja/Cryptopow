@extends('layouts.app', ['title' => 'Account'])
@section('contents')
<br><br><br>
        <div class="login-box">
            <div class="login">
                <br>
                <form action="/account/login" method="POST">
                    @csrf
                    <label for="uname">Username</label><br>
                    <input type="text" name="uname"><br><br>
                    <label for="passwd">Password</label><br>
                    <input type="password" name="passwd"><br><br>
                    <input type="submit" value="Login" name="submit"><br><br>
                    <a href="./regist.php">Create an Account</a>
                </form>
                {{-- <div class="recommend-outside" id="popup">
                    <div class="recommend" id="popup-1">
                        <?php include './php/login.php'; ?>
                    </div>
                </div> --}}
                <br><br>
            </div>
        </div>
@endsection
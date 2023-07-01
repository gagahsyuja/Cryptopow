@extends('layouts.app', ['title' => 'Help'])

@section('contents')

<br><br><br>
<div class="vram-box">
    <div class="vram">
        <br><br><br>
        <h2>What should we call you?</h2>
        <form action="" method="post">
            <br>
            <input type="text" name="name" placeholder=" Your name here...">
            <br><br><br>
            <h2>Choose Your VRAM</h2><br>
            <div class="vram-input">
                <input type="radio" value="2GB" name="two">
                <label for="two">2GB</label>
                <input type="radio" value="4GB" name="four">
                <label for="four">4GB</label>
                <input type="radio" value="6GB" name="six">
                <label for="six">6GB</label>
                <input type="radio" value="8GB" name="eight">
                <label for="eight">8GB</label>
            </div>
            <!-- <input type="text" name="text"> -->
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <br><br>
    <div class="recommend-outside" id="popup-1">
        <div class="recommend" id="popup">
            {{-- <?php include './php/help.php'; ?>
            <?php include './php/logout.php'; ?> --}}
        </div>
    </div>
    <br><br>
</div>

<script>

    let popup = document.getElementById("popup");
    let popup1 = document.getElementById("popup-1");

    function closePopup()
    {
        popup.style.display = 'none';
        popup1.style.display = 'none';
        window.location = './help.php';
    }

</script>

@endsection
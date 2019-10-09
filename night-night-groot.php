<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="night-night-groot">
    <img class="book-cover" src="<?php echo($imageSource);?>/x6fviaw.png" alt="cover art">
    <audio id="night_night_groot_Audio">
        <source src="<?php echo($audioSource);?>/night-night-groot-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Night Night, Groot</div>
                <div class="author">Brendan Deneen</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
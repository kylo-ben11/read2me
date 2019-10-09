<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="how-the-grinch-stole-christmas">
    <img class="book-cover" src="<?php echo($imageSource);?>/aTAseu6.png" alt="cover art">
    <audio id="how_the_grinch_stole_christmas_Audio">
        <source src="<?php echo($audioSource);?>/how-the-grinch-stole-christmas-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">How the Grinch Stole Christmas!</div>
                <div class="author">Dr. Seuss</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
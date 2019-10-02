<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="">
    <img class="book-cover" src="<?= $imageSource;?>/8VtpwgH.png" alt="cover art">
    <audio id="BOOK_TITLE_Audio">
        <source src="<?= $audioSource;?>/i-love-you-night-and-day-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">I Love You Night and Day</div>
                <div class="author">Smriti Prasadem-Halls</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
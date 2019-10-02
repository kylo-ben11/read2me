<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="little-blue-truck">
    <img class="book-cover" src="<?= $imageSource;?>/m3Xq1Sl.png" alt="little blue truck cover art">
    <audio id="littleBlueAudio">
        <source src="<?= $audioSource;?>/little-blue-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Little Blue Truck</div>
                <div class="author">Alice Schertle</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
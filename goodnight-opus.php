<?php include 'includes/header.php';?>

<!--Goodnight Opus-->
<div class="book" id="goodnight-opus">
    <img class="book-cover" src="<?= $imageSource;?>/ed5yymd.png" alt="goodnight opus cover art">
    <audio id="goodnightOpusAudio">
        <source src="<?=$audioSource;?>/goodnight-opus-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Goodnight Opus</div>
                <div class="author">Berkeley Breathed</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
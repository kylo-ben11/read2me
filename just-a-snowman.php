<?php include 'includes/header.php';?>

<!--Just a Snowman-->
<div class="book" id="snowman">
    <img class="book-cover" src="<?= $imageSource;?>/BZZiiva.png" alt="just a snowman cover art">
    <audio id="snowmanAudio">
        <source src="<?= $audioSource;?>/snowman-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Just a Snowman</div>
                <div class="author">Mercer Mayer</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
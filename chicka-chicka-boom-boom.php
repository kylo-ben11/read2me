<?php include 'includes/header.php';?>

<!--Chicka Chicka Boom Boom-->
<div class="book" id="chicka-boom">
    <img class="book-cover" src="<?= $imageSource;?>/6Ld02CH.jpg" alt="chicka chicka boom boom cover art">
    <audio id="chickaBoomAudio">
        <source src="<?= $audioSource;?>/chicka-boom.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Chicka Chicka Boom Boom</div>
                <div class="author">Bill Martin Jr.</div>
            </div>
            <div class="btns">
                <div class="iconfont play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
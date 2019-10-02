<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="good-for-me-and-you">
    <img class="book-cover" src="<?= $imageSource;?>/6e3rSQK.png" alt="good for me and you cover art">
    <audio id="goodForMeAndYouAudio">
        <source src="<?= $audioSource;?>/good-for-me-and-you-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Good for Me and You</div>
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
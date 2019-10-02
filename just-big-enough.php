<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="just-big-enough">
    <img class="book-cover" src="<?= $imageSource;?>/2YnHtgP.png" alt="just big enough cover art">
    <audio id="justBigEnoughAudio">
        <source src="<?= $audioSource;?>/just-big-enough-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Just Big Enough</div>
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
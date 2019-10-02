<?php include 'includes/header.php';?>

<!--Good Night Darth Vader-->
<div class="book" id="vader">
    <img class="book-cover" src="<?= $imageSource;?>/kZQIRUQ.png" alt="good night darth vader cover art">
    <audio id="vaderAudio">
        <source src="<?= $audioSource;?>/vader-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Goodnight Darth Vader</div>
                <div class="author">Jeffrey Brown</div>
            </div>
            <div class="btns">
                <div class="play-pause icon-play"></div>
            </div>
            <div class="progress"></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?>
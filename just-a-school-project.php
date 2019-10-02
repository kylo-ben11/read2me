<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="just-a-school-project">
    <img class="book-cover" src="<?= $imageSource;?>/1O9t59R.png" alt="just a school project cover art">
    <audio id="justASchoolProjectAudio">
        <source src="<?= $audioSource;?>/just-a-school-project-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Just a School Project</div>
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
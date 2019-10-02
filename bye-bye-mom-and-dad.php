<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="bye-bye-mom-and-dad">
    <img class="book-cover" src="<?= $imageSource;?>/oIimDPl.png" alt="bye bye mom and dad cover art">
    <audio id="byeByeMomAndDadAudio">
        <source src="<?= $audioSource;?>/bye-bye-mom-and-dad-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">Bye-Bye, Mom and Dad</div>
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
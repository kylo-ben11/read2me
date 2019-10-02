<?php include 'includes/header.php';?>

<!--Little Blue Truck-->
<div class="book" id="my-trip-to-the-hospital">
    <img class="book-cover" src="<?= $imageSource;?>/7iDTZad.png" alt="my trip to the hospital cover art">
    <audio id="myTripToTheHospitalAudio">
        <source src="<?= $audioSource;?>/my-trip-to-the-hospital-audio.mp3" type="audio/mpeg">
    </audio>
    <div class="player-container">
        <div class="player">
            <div class="left-side"></div>
            <div class="info">
                <div class="title">My Trip to the Hospital</div>
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
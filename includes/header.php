<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Read2Me</title>
    <link rel="icon" type="image/png" href="https://benknier.com/read2me/apple-touch-icon.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">

    <script defer src="node_modules/swup/dist/swup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script defer src="js/main.js"></script>
    <script import SwupPreloadPlugin from '@swup/preload-plugin' ;></script>
</head>

<body>

    <?php 
        $audioSource = 'http://1982662508.rsc.cdn77.org/audio';
        $imageSource = 'https://i.imgur.com';
    ;?>

    <!--Navigation-->
    <div class="main-nav">
        <div class="hamburger" id="hamburger-9">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="nav-panel">
        <a href="index.php" data-swup-preload>Library</a>
    </div>
    <main id="swup" class="transition-fade">
<?php

function getRandomWallpaper(){
    $backgrounds = scandir("img/backgrounds/");
    do {
        $file = $backgrounds[rand(0,count($backgrounds)-1)];
    } while ($file == '.' || $file == '..');

    return $file;
}
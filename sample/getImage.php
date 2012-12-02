<?php

if(isset($_GET['url']))
{
    $width = (isset($_GET['width'])) ? $_GET['width'] : 50;
    $height =  (isset($_GET['height'])) ? $_GET['height'] : 50;

    require_once '../lib/Image.php';
    $image = new Image($_GET['url']);
    $image->resize($width, $height);
    $image->display();
}
<?php

$request=$_SERVER["REQUEST_URI"];


switch ($request){

    case("/facebook/"):
        require __DIR__ . "/view/index.php";
        break;

    case("/facebook/explore"):
        require __DIR__ . "/view/explore.php";
        break;

    case("/facebook/personal_page"):
        require __DIR__ . "/view/personal_page.php";
        break;

}






?>
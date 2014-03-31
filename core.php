<?php
require('labs/menu.php');

$lab   = "labs/Generals/main.php";
$title = "Main-Example";


if(!empty($_GET['dir'])){
    $lab    = $_GET['dir'].".php";
    $title  = $_GET['title'];
}

$title = noDash($title);

//General PHP Functions

//returns a menu from the array
function showMenu ($menu)
{
    foreach ($menu as $title => $links){
        echo "<li>".noDash($title)."<ul>";
        foreach($links as $menu ){
            doActionLink($title."/".$menu['file'],$menu['title']);
        }
        echo "</ul></li>";
    }
}

//Quit the dash to show them
function noDash($str)
{
    return str_replace("-", " ", $str);
}

//Writes a link to the content
function doActionLink($file,$title)
{
    echo "<li><a href='index.php?dir=labs/$file&title=$title'>".noDash($title)."</a></li>";
}

//Shows the lab on the content part
function showContent($lab){
    if( file_exists ($lab) === TRUE)
        include($lab);
    else
        include('labs/Generals/badRequest.php');
}

<?php

//Interesting links for standards: http://dev.w3.org/html5/html-author/

require('labs/menu.php');

function doActionLink($file,$title){
    $titleNoDash = str_replace("-", " ", $title);
    echo "<li><a href='index.php?dir=labs/$file&title=$title'>$titleNoDash</a></li>";
}

$title = "Main-Example";
//print_r($_GET);

$lab = "labs/main.php";

if(!empty($_GET['dir'])){
    $lab    = $_GET['dir'].".php";
    $title  = $_GET['title'];
}
$title = str_replace("-", " ", $title);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejemplos CSS3 y HTML5: <?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="rss/style.css">
</head>
<body>
<div id="allwrapper">
    <div id="header">
        Ejemplos HTML5 - CSS3 :
        <span id="subtitle"><?= $title ?></span>
    </div>
    <div id="menu">
        <ul>
        <?php
        foreach ($menuactions as $title => $links){
            echo "<li>".$title."<ul>";
            foreach($links as $menu ){
                doActionLink($title."/".$menu['file'],$menu['title']);
            }
            echo "</ul></li>";
        }
        ?>
        </ul>
    </div>
    <div id="content">
        <?php
        if( file_exists ($lab) )
            require($lab);
        else
            echo "Bad Request  boy!!";
        ?>
    </div>
</div>
</body>
</html>
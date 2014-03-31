<?php

//Interesting links for standards: http://dev.w3.org/html5/html-author/

require('menu.php');

function phpIzzit($dir){
    return $dir.".php";
}

function doActionLink($file,$title){
    echo "<li><a href='index.php?dir=$file&title=$title'>$title</a></li>";
}

$title = "Main Example";
//print_r($_GET);

$defdir = "main";

if(!empty($_GET['dir'])){
    $defdir = $_GET['dir'];
    $title  = $_GET['title'];
}

$direction = phpIzzit($defdir);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejemplos CSS3 y HTML5: <?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        foreach ($menuactions as $menu ){
            doActionLink($menu['file'],$menu['title']);
        }
        ?>
        </ul>
    </div>
    <div id="content">
        <?php
        if( file_exists ($direction) )
            require($direction);
        else
            echo "Bad Request  boy!!";
        ?>
    </div>
</div>
</body>
</html>
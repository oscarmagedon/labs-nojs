<?php

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
<html>
<head>
    <title>Ejemplos CSS3 y HTML5: <?= $title ?></title>
</head>
<style>
    #allwrapper{
        padding: 5px;
        background-color: #345;
    }
    #header{
        height: 50px;
        border: 1px solid black;
        background-color: #585;
        font-size: 200%;
    }
        #subtitle{
            font-style: italic;
            background-color: #521;
        }
    #menu{
        float: left;
        width: 300px;
        background-color: #ab3;
        height: 600px;
        overflow: scroll;
    }
    #content{
        float left;
        background-color: #4da;
        height: 600px;
        overflow: scroll;
    }
</style>
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
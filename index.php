<?php require("core.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Our HTML5 - CSS3 Examples: <?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="rss/style.css">
</head>
<body>
<div id="lab-wrapper">
    <div id="lab-header">
        <span id="lab-title">Our HTML5 - CSS3 Examples:</span> <span id="lab-subtitle"><?= $title ?></span>
    </div>
    <div id="lab-menu">
        <ul><?php showMenu($menuactions) ?></ul>
    </div>
    <div id="lab-content">
        <?php showContent($lab) ?>
    </div>
</div>
</body>
</html>
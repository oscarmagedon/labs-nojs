<?php
$parts = explode("/",$lab);
?>
<div id='bad-request'>
    <div class="title">Bad Request.</div>
    The route <b><?= $lab ?></b> is not valid.

    <p>Verify next options:</p>
    <ul>
        <li>
            You've created the file <b><?= $parts[2] ?></b> on <b><?= $parts[0]."/".$parts[1] ?></b> folder.
        </li>
        <li>
            You didn't escape the ".php" extension
        </li>
        <li>
            You're a noob!
        </li>
    </ul>

</div>
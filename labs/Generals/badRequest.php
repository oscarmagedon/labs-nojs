<?php
$parts = explode("/",$lab);
?>
<div id="bad-request">
    <h2 class="first-title">Bad Request.</h2>
    <p class="text-wrapper">
        The route: <br />
        <b><?= $lab ?></b> <br />
        Is not valid!<br />
        <b>Verify next options: </b>
    </p>
        <ul class="normal-list">
            <li>
                The folder <b><?= $parts[0]."/".$parts[1] ?></b> actually exists.
            </li>
            <li>
                You've created the file <b><?= $parts[2] ?></b> on <b><?= $parts[0]."/".$parts[1] ?></b> folder.
            </li>

            <li>
                You didn't escape the ".php" extension
            </li>
            <li>
                You're a noob [ joke ;-) ]
            </li>
        </ul>
    </p>
</div>
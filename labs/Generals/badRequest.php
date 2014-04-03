<?php
$parts = explode("/",$lab);
?>
<div id='bad-request'>
    <div class="title">Bad Request.</div>
    <p>
        The route: <br />
        <b><?= $lab ?></b> <br />
        Is not valid!<br />
        <b>Verify next options: </b>
    </p>
    <p>
        <ul>
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
<style>
#bad-request ul {
    padding: 5px 0 5px 35px;
    list-style: circle;
}
    #bad-request ul li{
        padding: 5px 0 5px 5px;
    }
#bad-request p{
    margin: 5px 0 20px 10px;
    line-height: 140%;
}
</style>
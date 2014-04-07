<style>
    /* General class to the div test */
    #animated {
        width  : 100px;
        height : 100px;
        border : 1px solid #900;
        text-align: center;
        margin: 10px;
        border-radius: 4px;

        /* if we want to move it, we need to put this */

        position: relative;

        /* Chrome, Safari, Opera */

        -webkit-animation-name: myfirst;
        -webkit-animation-duration: 5s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-delay: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
        -webkit-animation-play-state: running;

        /* Standard syntax */

        animation-name: myfirst;
        animation-duration: 5s;
        animation-timing-function: linear;
        animation-delay: 2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-play-state: running;
    }

    /* Chrome, Safari, Opera */
    @-webkit-keyframes myfirst
    {
        0%   { left: 0px;   top: 0px; }
        25%  { left: 200px; top: 0px; }
        50%  { left: 200px; top: 200px; }
        75%  { left: 0px;   top: 200px; }
        100% { left: 0px;   top: 0px; }
    }

    /* Standard syntax */
    @keyframes myfirst
    {
        0%   { left: 0px;   top: 0px; }
        25%  { left: 200px; top: 0px; }
        50%  { left: 200px; top: 200px; }
        75%  { left: 0px;   top: 200px; }
        100% { left: 0px;   top: 0px; }
    }
</style>
<div>
    <h2 class="first-title">Non-stop animation!</h2>

    <p class="text-wrapper">
        
    </p>

    <div id="animated">Moving!</div>

</div>
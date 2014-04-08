<style>
    /* set an space to the animation */
    #animated-section {
        height: 320px;
        width: 320px;
        border: 1px solid blue;
        margin-left: 30px;
    }
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
        -webkit-animation-duration: 3s;
        -webkit-animation-delay: 2s;
        /* Possible values: linear | ease | ease-in | ease-out | cubic-bezier(n,n,n,n) */
        -webkit-animation-timing-function: ease;
        /* Possible values: infinite | [n] */
        -webkit-animation-iteration-count: 2;
        /* Possible values: normal | reverse | alternate | alternate-reverse */
        -webkit-animation-direction: reverse;
        /* Possible values: paused | running */
        -webkit-animation-play-state: running;

        /* Standard syntax */

        animation-name: myfirst;
        animation-duration: 5s;
        animation-delay: 2s;
        /* Possible values: linear | ease | ease-in | ease-out | cubic-bezier(n,n,n,n) */
        animation-timing-function: ease;
        /* Possible values: infinite | [n] */
        animation-iteration-count: 2;
        /* Possible values: normal | reverse | alternate | alternate-reverse */
        animation-direction: normal;
        /* Possible values: paused | running */
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
        This is, by far, the most important lab for now, in the code we have this seven (7)
        animation properties to configure and test.
    </p>
    <div id="animated-section">
        <div id="animated">Moving!</div>
    </div>
    <ul class="normal-list">
        <li>
            <b>name:</b> the name of the animation to do.
        </li>
        <li>
            <b>duration:</b> duration in seconds (5s) or miliseconds (5000ms)
        </li>
        <li>
            <b>timing-function:</b> we can set many differents values here, is put on
            the code to test them. <a href="http://www.w3schools.com/cssref/css3_pr_animation-timing-function.asp" target="_blank">
                Source
            </a>
        </li>
        <li>
            <b>delay:</b> delay (pause) of the animation in seconds (2s) or miliseconds (2000ms) before it starts.
        </li>
        <li>
            <b>iteration-count:</b> allows us decide how many times the animation is going to be executed or infinite value, that means
            cyclic. <a href="http://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp" target="_blank">Source</a>
        </li>
        <li>
            <b>direction:</b> Has many options to show us the movement of the animation.
            <a href="http://www.w3schools.com/cssref/css3_pr_animation-direction.asp" target="_blank">Source</a>
        </li>
        <li>
            <b>play-state:</b> has the paused/running properties, the paused useful if we want to animate after an action.
            <a href="http://www.w3schools.com/cssref/css3_pr_animation-direction.asp" target="_blank">Source</a>
        </li>
    </ul>
</div>
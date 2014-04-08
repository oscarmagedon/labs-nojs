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
        position: relative;
        /* The order is: nameAnimation | duration | timing | delay | iterCount | direction */
        /* Chrome, Safari, Opera */
        -webkit-animation: myfirst 5s linear 2s infinite alternate;
        /* Standard syntax */
        animation: myfirst 5s linear 2s infinite alternate;
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
    <h2 class="first-title">Same animation, less code lines!</h2>

    <p class="text-wrapper">
        This example is doing the same but we can configure all of it in only
        one code line (except the play-state).
    </p>

    <div id="animated-section">
        <div id="animated">Moving!</div>
    </div>
</div>
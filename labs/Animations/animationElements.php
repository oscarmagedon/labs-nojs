<style>
/* General class to all the divs */
.animated {
    width  : 100px;
    height : 100px;
    border : 1px solid #900;
    text-align: center;
    margin: 10px;
    border-radius: 4px;
    position: relative;
}

#first-one{
    /* ANIMATION PART TO: Mozilla */
    animation : moveToRight 6s;
    /* ANIMATION PART TO: Chrome, Safari, Opera*/
    -webkit-animation : moveToRight 6s;
}

#second-one{
    /* ANIMATION PART TO: Mozilla */
    animation : moveToRight 3s;
    /* ANIMATION PART TO: Chrome, Safari, Opera*/
    -webkit-animation : moveToRight 3s;
}

#third-one{
    /* ANIMATION PART TO: Mozilla */
    animation : moveToRight 1s;
    /* ANIMATION PART TO: Chrome, Safari, Opera*/
    -webkit-animation : moveToRight 1s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes moveToRight
{
    from { left: 0px; }
    to   { left: 270px;}
}

/* Standard syntax */
@keyframes moveToRight
{
    from { left: 0px; }
    to   { left: 270px; }
}
</style>
<div style="width: 600px">

    <h2 class="first-title">Same animation, three elements!</h2>

    <p class="text-wrapper">
        Here we have 3 divs with the same class but different ids, each one does the same
        animation but each one has a different duration. (Mouse Over)
    </p>

    <p class="text-wrapper">
        I won't explain the webkit and animation duration this time, because we got it from
        <a href="index.php?dir=labs/Animations/changeColor&title=Change-Color">this example here</a>
    </p>
    <div class="animated" id="first-one">Move to right</div>

    <div class="animated" id="second-one">This one too!</div>

    <div class="animated" id="third-one">... and this.</div>

</div>
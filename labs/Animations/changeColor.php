<style>
/* General class to the div test */
#animated {
    width  : 100px;
    height : 100px;
    background-color  : #900;
    text-align: center;
    margin: 10px;
    /* ANIMATION PART TO: Mozilla */
    animation : changeColorAnimation 4s;
    /* ANIMATION PART TO: Chrome, Safari, Opera*/
    -webkit-animation : changeColorAnimation 4s;
}
/* animation function to Mozilla */
@keyframes changeColorAnimation
{
    from { background: red; }
    to   { background: yellow; }
}
/* animation function to Chrome, Safari, Opera */
@-webkit-keyframes changeColorAnimation
{
    from { background: red; }
    to   { background: yellow; }
}
</style>
<div style="width: 600px;">
    <h2 class="first-title">Changing one Color to Another</h2>
    <p class="text-wrapper">
        Here the element changes from Red to Yellow in 4 seconds on load page.
    </p>

    <div id="animated">Change Two Colors</div>

    <p class="text-wrapper">
        Note that we have in our code a <b>div</b> element with id = <b>animated</b>. We give it some basic
        class to see it. At the end of the properties on the CSS part, we can see two new CSS3 properties:
    </p>
    <ul class="normal-list">
        <li>
            <b>animation</b>: Used by mozilla, followed by the name of the <b>@keyframes</b>
            we set with the animation properties and the time in seconds of the animation's duration.
        </li>
        <li>
            <b>-webkit-animation</b>: Used by chorme, opera, safari, and does the same, followed by the name of
            the <b>@-webkit-keyframes</b> and the time in seconds of the animation's duration.
        </li>
    </ul>
    <p class="text-wrapper">
        Even if we have to call each one, note that in both functions (<b>@keyframes</b> and <b>@-webkit-keyframes</b>)
        the properties are the same, which color starts and which ends, that's it!
    </p>
    <p class="text-wrapper">
        Remember that we can set the duration of the animation on the properties of the element,
        that's useful because we can use the same animation in several elements with different delays
        (<a href="index.php?dir=labs/Animations/animationElements&title=Animation-Elements">Example here</a>).
    </p>

    <p>
        <a href="http://www.w3schools.com/css/css3_animations.asp" target="_blank">Source on W3C here</a>
    </p>
</div>


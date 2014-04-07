<style>
.text-wrapper {
    width: 600px;
}
/* General class to the div test */
#animated {
    width  : 100px;
    height : 100px;
    background-color  : #900;
    text-align: center;
    margin: 10px;
    /* ANIMATION PART TO: Mozilla */
    animation : myfirst 4s;
    /* ANIMATION PART TO: Chrome, Safari, Opera*/
    -webkit-animation : myfirst 4s;
}
/* animation function to Mozilla */
@keyframes myfirst
{
    from { background: red; }
    to   { background: yellow; }
}
/* animation function to Chrome, Safari, Opera */
@-webkit-keyframes myfirst
{
    from { background: red; }
    to   { background: yellow; }
}
</style>
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
        we set with the animation properties.
    </li>
    <li>
        <b>-webkit-animation</b>: Used by chorme, opera, safari, and does the same, followed by the name of
        the <b>@-webkit-keyframes</b> we set with the animation properties.
    </li>
</ul>
<p class="text-wrapper">

</p>

<p>
    <a href="http://www.w3schools.com/css/css3_animations.asp" target="_blank">Source on W3C here</a>
</p>

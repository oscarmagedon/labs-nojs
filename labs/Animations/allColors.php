<style>
#animated {
    width  : 100px;
    height : 100px;
    background-color  : #900;
    text-align: center;
}
#animated:hover {
    cursor: help;
    -webkit-animation : myfirst 2s; /* Chrome, Safari, Opera */
    animation : myfirst 2s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}

/* Standard syntax */
@keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}

#fullColor {
    width:100px;
    height:100px;
    background:red;
}
#fullColor:hover {
    -webkit-animation: myfirst 5s; /* Chrome, Safari, Opera */
    animation: fourColors 4s;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes fourColors
{
    0%   {background:red;}
    25%  {background:yellow;}
    50%  {background:blue;}
    100% {background:green;}
}

/* Standard syntax */
@keyframes fourColors
{
    0%   {background:red;}
    25%  {background:yellow;}
    50%  {background:blue;}
    100% {background:green;}
}

</style>
<h2>Animation CSS3</h2>
<a href="http://www.w3schools.com/css/css3_animations.asp" target="_blank">Link on W3C</a>
<p>
    We're going to try animate, move, change color, etc... an element on mouse over.
</p>

<div id="animated">MouseOver Color</div>

<p>
    Here, we're gonna give the div 4 colors in 2 secs each
</p>

<div id="fullColor"></div>
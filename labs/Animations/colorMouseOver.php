<style>
#fullColor {
    width:100px;
    height:100px;
    background:red;
}
#fullColor:hover {
    /*   -webkit-animation: myfirst 5s;   Chrome, Safari, Opera */
    animation: fourColors 4s;
}

@keyframes fourColors
{
    0%   {background:red;}
    25%  {background:yellow;}
    50%  {background:blue;}
    100% {background:green;}
}

/* Chrome, Safari, Opera */
/*
@-webkit-keyframes fourColors
{
    0%   {background:red;}
    25%  {background:yellow;}
    50%  {background:blue;}
    100% {background:green;}
}
*/
</style>
<p>
    Here, we're gonna give the div 4 colors in 2 secs each
</p>

<div id="fullColor">Please, mouseover it!</div>
<style>
#animated {
    width  : 100px;
    height : 100px;
    background-color  : #900;
    text-align: center;
    animation : myfirst 2s;
}

@keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}

/*
-webkit-animation : myfirst 2s; /* Chrome, Safari, Opera
*/

/* Chrome, Safari, Opera */
/*
@-webkit-keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}
*/
</style>
<h2>Animation CSS3</h2>
<a href="http://www.w3schools.com/css/css3_animations.asp" target="_blank">Link on W3C</a>
<p>
    Here the element changes from red to yellow on load page.
</p>

<div id="animated">MouseOver Color</div>


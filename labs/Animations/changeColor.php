<style>

/* General class to the div test */
#animated {
    width  : 100px;
    height : 100px;
    background-color  : #900;
    text-align: center;
    margin: 10px;
}

/* Mozilla Part */
#animated {
    animation : myfirst 2s;
}
@keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}
/* Chrome, Safari, Opera Part */
#animated {
    -webkit-animation : myfirst 2s;
}
@-webkit-keyframes myfirst
{
    from {background:red;}
    to {background:yellow;}
}
/**/
</style>
<h2>Animation CSS3</h2>
<a href="http://www.w3schools.com/css/css3_animations.asp" target="_blank">Link on W3C</a>
<p>
    Here the element changes from red to yellow on load page.
</p>

<div id="animated">MouseOver Color</div>


<style>
#fullColor {
    width:100px;
    height:100px;
    background:red;
    border-radius: 4px;
    padding: 5px;
    font-style: italic;
    text-align: center;
    cursor: wait;
}
#fullColor:hover {
    /* Mozilla */
    animation: fourColors 4s;
    /* Chrome, Safari, Opera;*/
    -webkit-animation: fourColors 4s;
}
/* Mozilla */
@keyframes fourColors
{
    0%   { background: red; }
    25%  { background: yellow; }
    50%  { background: blue; }
    100% { background: green; }
}
/* Chrome, Safari, Opera */
@-webkit-keyframes fourColors
{
    0%   { background: red; }
    25%  { background: yellow; }
    50%  { background: blue; }
    100% { background: green; }
}
</style>
<h2 class="first-title">Changing 4 colors on mouse over</h2>
<p class="text-wrapper">
    Here, we're gonna give the div 4 colors in 2 secs each on Mouse Over. Then it comes back to
    red like the beginning.
</p>

<div id="fullColor">Please, mouseover it!</div>
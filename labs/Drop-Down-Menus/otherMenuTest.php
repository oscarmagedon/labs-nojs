<style>
    /* demo page styles */
    .example {
        font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
        position:relative;
        background:#fff url('rss/img/background.jpg');
        width:520px;
        height:382px;
        border:1px #000 solid;
        margin:20px auto;
        padding:15px;
        border-radius:3px;
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
    }

    /* main menu styles */

    .nav,.nav ul {
        list-style:none;
        margin:0;
        padding:0;
    }

    .nav {
        position:relative;
    }

    .nav ul {
        height:0;
        left:0;
        overflow:hidden;
        position:absolute;
        top:46px;
    }

    .nav li {
        float:left;
        position:relative;
    }

    .nav li a {
        -moz-transition:0.5s;
        -o-transition:0.5s;
        -webkit-transition:0.5s;
        background-color:#7770B4;
        border:1px solid #6E67A6;
        color:#FFF;
        display:block;
        font-size:16px;
        line-height:35px;
        padding:5px 20px;
        text-decoration:none;
        transition:0.5s;
    }

    .nav li:hover > a {
        background:#8CCA33;
        border-color:#6E67A6;
        color:#fff;
    }

    .nav li:hover ul.subs {
        height:auto;
        width:180px;
    }

    .nav ul li {
        -moz-transition:0.5s;
        -o-transition:0.5s;
        -webkit-transition:0.5s;
        opacity:0;
        transition:0.5s;
        width:100%;
    }

    .nav li ul li {
        -moz-transition-delay:0s;
        -o-transition-delay:0s;
        -webkit-transition-delay:0s;
        transition-delay:0s;
    }

    .nav li:hover ul li {
        opacity:1;
        -moz-transition-delay:0.5s;
        -o-transition-delay:0.5s;
        -webkit-transition-delay:0.5s;
        transition-delay:0.5s;
    }

    .nav ul li a {
        background:#7770B4;
        border-color:#6E67A6;
        color:#fff;
        line-height:1px;
        -moz-transition:1.5s;
        -o-transition:1.5s;
        -webkit-transition:1.5s;
        transition:1.5s;
    }

    .nav li:hover ul li a {
        line-height:35px;
    }

    .nav ul li a:hover {
        background:#8CCA33;
        background-image: -webkit-gradient(linear, 0% 0%, 0% 95%, from(rgba(255, 255, 255, 0.5)), to(rgba(255, 255, 255, 0)));
        background-image: -moz-linear-gradient(-90deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
        background-image: -o-linear-gradient(-90deg,rgba(255,255,255,0.5),rgba(255,255,25,0));
    }
</style>
<div class="example">
    <ul class="nav">
        <li><a href="http://www.script-tutorials.com/">Home</a></li>
        <li><a href="http://www.script-tutorials.com/">Tutorials</a>
            <ul class="subs">
                <li><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></li>
                <li><a href="http://www.script-tutorials.com/category/jquery/">JS / jQuery</a></li>
                <li><a href="http://www.script-tutorials.com/category/php/">PHP</a></li>
                <li><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></li>
                <li><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></li>
                <li><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></li>
                <li><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></li>
            </ul>
        </li>
        <li><a href="http://www.script-tutorials.com/category/resources/">Resources</a>
            <ul class="subs">
                <li><a href="http://www.script-tutorials.com/category/php/">PHP</a></li>
                <li><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></li>
                <li><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></li>
                <li><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></li>
                <li><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></li>
            </ul>
        </li>
        <li><a href="http://www.script-tutorials.com/about/">About</a></li>
        <li><a href="http://www.script-tutorials.com/creating-css3-dropdown-menu-4/">Back</a></li>
    </ul>
    <div style="clear:both"></div>
</div>
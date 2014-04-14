<style>
    /* demo page styles */
    #example {
        font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
        float:left;
        background:#fff url('rss/img/background.jpg');
        width:550px;
        height:300px;
        border:1px #000 solid;
        margin: 10px;
        padding:15px;
        border-radius:3px;
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
    }

    /* main menu styles */

    #nav ul {
        list-style:none;
        margin: 0;
        padding: 0;
        height:0;
        left: 25px;
        overflow:hidden;
        position:absolute;
        top:47px;
    }

    #nav li {
        float:left;
        position:relative;
    }

    #nav li a {
        transition: 0.5s;
        -webkit-transition : 0.5s;
        background-color: #7770B4;
        border: 1px solid #6E67A6;
        color: #FFF;
        display: block;
        line-height: 35px;
        padding: 5px 10px;
        text-decoration: none;
    }

    .only-tit{
        font-style: italic;
        cursor: default;
    }

    #nav li:hover > a {
        background:#8CCA33;
        border-color:#6E67A6;
        color:#000;
        /* Standard syntax */
        background-image: linear-gradient(90deg,rgba(255,255,255,0.5),rgba(255,255,25,0));
        /* For Firefox 3.6 to 15 */
        background-image: -moz-linear-gradient(90deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
        /* For Chrome 5.1 to 6.0 */
        background-image: -webkit-gradient(linear, 0% 95%, 0% 0%, from(rgba(255, 255, 255, 0.5)), to(rgba(255, 255, 255, 0)));
    }

    #nav li:hover ul.subs {
        height:auto;
        width:180px;
    }

    #nav ul li {
        transition:0.5s;
        -webkit-transition:0.5s;
        opacity:0;
        width:100%;
    }

    #nav li ul li {
        -webkit-transition-delay:0s;
        transition-delay:0s;
    }

    #nav li:hover ul li {
        opacity: 1;
        transition-delay:0.2s;
        -webkit-transition-delay:0.2s;
    }

    #nav ul li a {
        transition: 0.3s;
        -webkit-transition: 0.3s;
        background: #7770B4;
        border-color: #6E67A6;
        color: #fff;
        line-height: 1px;
    }

    #nav li:hover ul li a {
        line-height: 30px;
    }

    #nav ul li a:hover {
        background: #8CCA33;
        /* Standard syntax */
        background-image: linear-gradient(-90deg,rgba(255,255,255,0.5),rgba(255,255,25,0));
        /* For Firefox 3.6 to 15 */
        background-image: -moz-linear-gradient(-90deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
        /* For Chrome 5.1 to 6.0 */
        background-image: -webkit-gradient(linear, 0% 0%, 0% 95%, from(rgba(255, 255, 255, 0.5)), to(rgba(255, 255, 255, 0)));

    }


</style>
<div id="example">
    <ul id="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#" class="only-tit">Tutorials&nbsp;&nbsp;&nbsp;&nbsp;&#9660;</a>
            <ul class="subs">
                <li><a href="#">HTML / CSS</a></li>
                <li><a href="#">JS / jQuery</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">XSLT</a></li>
                <li><a href="#">Ajax</a></li>
                <li><a href="#">HTML / CSS</a></li>
            </ul>
        </li>
        <li><a href="#" class="only-tit">Resources&nbsp;&nbsp;&nbsp;&nbsp;&#9660;</a>
            <ul class="subs">
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">XSLT</a></li>
                <li><a href="#">Ajax</a></li>
                <li><a href="#">HTML / CSS</a></li>
            </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Back</a></li>
    </ul>
</div>
<a href="" class="button save">
 	Save
</a>

<style> 

.button {        
    display: inline-block;
    white-space: nowrap;
    background-color: #CCCCCC;
    background-image: linear-gradient(top, #eee, #374D62);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#eeeeee', EndColorStr='#cccccc');
    border: 1px solid #777;
    padding: 0 1.5em;
    margin: 0.5em;
    font: bold 1em/2em Arial, Helvetica;
    text-decoration: none;
    color: #333;
    text-shadow: 0 1px 0 rgba(255,255,255,.8);
    border-radius: .2em;
    box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
}

.button:hover {
    color: #18BA9A;        
    background-image: linear-gradient(top, #fafafa, #ddd);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#fafafa', EndColorStr='#dddddd');        
}

.button:active {
    box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
    position: relative;
    top: 1px;
}

.button:focus {
    outline: 0;
    background: #fafafa;
}    

.button:before {
    background: #ccc;
    background: rgba(0,0,0,.1);
    float: left;        
    width: 1em;
    text-align: center;
    font-size: 1.5em;
    margin: 0 1em 0 -1em;
    padding: 0 .2em;
    box-shadow: 1px 0 0 rgba(0,0,0,.5), 2px 0 0 rgba(255,255,255,.5);
    border-radius: .15em 0 0 .15em;
    pointer-events: none;        
}


.save:before {
    content: "\25B6";
}
	
</style>
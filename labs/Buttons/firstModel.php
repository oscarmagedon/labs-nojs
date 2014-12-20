<a href="" class="button">
 	Button
</a>
 	
<a href="" class="button add">
 	Add
</a>
 
<a href="" class="button edit">
 	Edit
</a>

<a href="" class="button delete">
 	Delete
</a>
 
<a href="" class="button save">
 	Save
</a>
 
<a href="" class="button like">
 	Like
</a>

<a href="" class="button next">
 	Next
</a>

<a href="" class="button star">
 	Start
</a>

<a href="" class="button spark">
 	Spark
</a> 

<a href="" class="button play">
 	Play
</a>

<style>

.button {        
    display: inline-block;
    white-space: nowrap;
    background-color: #ccc;
    background-image: linear-gradient(top, #eee, #ccc);
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
    background-color: #ddd;        
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

/* Hexadecimal entities for the icons */

.add:before {
    content: "\271A";
}

.edit:before {
    content: "\270E";        
}

.delete:before {
    content: "\2718";        
}

.save:before {
    content: "\2714";        
}

.email:before {
    content: "\2709";        
}

.like:before {
    content: "\2764";        
}

.next:before {
    content: "\279C";
}

.star:before {
    content: "\2605";
}

.spark:before {
    content: "\2737";
}

.play:before {
    content: "\25B6";
}

</style>
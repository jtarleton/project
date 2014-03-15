<!DOCTYPE html>
<head>
<title>Osiris Setup and Installation</title>

<style type="text/css">

* {
margin:0;
padding:0;
}
body{
margin:0;padding:5px;
background-image: url('./images/mypics/v2_y_background-1920x1200.jpg'); 
font-family:Verdana, sans;
color:#FAFAFA;
font-weight:bold;
font-size:14px;
line-height:30px;
}

.ok { color:lime; }
th {
background-color:#696969; color:#FAFAFA;
}





/* ui.css

   This code is free. */


/* Big Buttons */

a.bigbtn {
	font-size: 25px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	padding: 15px;
}

a.bigbtn:hover {
	background: #2eacff;
}

a.bigbtn:active {
	top: 1px;
}

a.bigbtn2 {
	font-size: 25px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	border-radius: 5px;
	padding: 15px;
}

a.bigbtn2:hover {
	background: #2eacff;
}

a.bigbtn2:active {
	top: 1px;
}

a.bigbtn3 {
	font-size: 25px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 15px;
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9);
	border: 1px solid #0191d9;
}

a.bigbtn3:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.bigbtn3:active {
	top: 1px;
}

a.bigbtn4 {
	font-size: 25px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 15px;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4);
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9);
	border: 1px solid #0082c3;
}

a.bigbtn4:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.bigbtn4:active {
	top: 1px;
}


/* Small Buttons */


a.smallbtn {
	font-size: 20px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	padding: 10px;
}

a.smallbtn:hover {
	background: #2eacff;
}

a.smallbtn:active {
	top: 1px;
}

a.smallbtn2 {
	font-size: 20px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	border-radius: 5px;
	padding: 10px;
}

a.smallbtn2:hover {
	background: #2eacff;
}

a.smallbtn2:active {
	top: 1px;
}

a.smallbtn3 {
	font-size: 20px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 10px;
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9));
	border: 1px solid #0191d9;
}

a.smallbtn3:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.smallbtn3:active {
	top: 1px;
}

a.smallbtn4 {
	font-size: 20px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 10px;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4);
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9));
	border: 1px solid #0082c3;
}

a.smallbtn4:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.smallbtn4:active {
	top: 1px;
}



/* Tag Buttons */


a.tagbtn {
	font-size: 15px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	padding: 5px;
}

a.tagbtn:hover {
	background: #2eacff;
}

a.tagbtn:active {
	top: 1px;
}

a.tagbtn2 {
	font-size: 15px;
	font-weight: bold;
	color: #fff;
	background: #2da1ec;
	border-radius: 5px;
	padding: 5px;
}

a.tagbtn2:hover {
	background: #2eacff;
}

a.tagbtn2:active {
	top: 1px;
}

a.tagbtn3 {
	font-size: 15px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 5px;
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9));
	border: 1px solid #0191d9;
}

a.tagbtn3:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.tagbtn3:active {
	top: 1px;
}

a.tagbtn4 {
	font-size: 15px;
	font-weight: bold;
	color: #fff;
	border-radius: 5px;
	padding: 5px;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4);
	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
	background-image: linear-gradient(#2da1ec, #0191d9));
	border: 1px solid #0082c3;
}

a.tagbtn4:hover {
	background-image: -webkit-linear-gradient(#2eacff, #0191d9);
	background-image: -moz-linear-gradient(#2eacff, #0191d9);
	background-image: -ms-linear-gradient(#2eacff, #0191d9);
	background-image: linear-gradient(#2eacff, #0191d9);
}

a.tagbtn4:active {
	top: 1px;
}


/* Inputs */


/* Placeholder Styles */

::-webkit-input-placeholder {
   color: #ccc;
   font-weight: lighter;
}

::-moz-input-placeholder {
   color: #ccc;
   font-weight: lighter;
}

/* Default input styles */

input[type=name],
input[type=email],
input[type=password],
input[type=text],
textarea[type=text] {
	font-family: "Helvetica Neue", Helvetica, sans-serif;
	font-size: 25px;
	width: 100%;
	color: #999;
	padding: 10px;
	border: 1px solid #ddd;
	border-radius: 5px;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

input[type=name]:hover,
input[type=email]:hover,
input[type=password]:hover,
input[type=text]:hover,
textarea[type=text]:hover {
	outline: none;
	border: 1px solid #bbb;
	box-shadow: none;
}

input[type=name]:focus,
input[type=email]:focus,
input[type=password]:focus,
input[type=text]:focus,
textarea[type=text]:focus {
	outline: none;
	border: 1px solid #00bce9;
	box-shadow: 0 0 5px #2da1ec;
}

textarea[type=text] {
	height: 200px;
}

input.highlight {
	border: 1px solid #ffcc33;
	box-shadow: 0 0 5px #ffff00;
}

input.error {
	border: 1px solid #dd212b;
	box-shadow: 0 0 5px #ed1b24;
}


/* Sliders */

/* (These only work in webkit browsers-be careful! */


input[type="range"] {
    -webkit-appearance: none;
    outline: none;
    width: 250px;
    height: 10px;
    border-radius: 10px;
    position: relative;    
    background-color: rgba(0, 0, 0, .8);    
    border: 0;
    cursor: pointer;
    margin-top: 20px;
    box-shadow: 0 1px 0 #fff, inset 0 0 5px rgba(0, 0, 0, 1);
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    position: relative;
    z-index: 1;
    width: 20px;
    height: 20px;
    border-radius: 100%;
   	background-image: -webkit-linear-gradient(#2da1ec, #0191d9);
   	background-image: -moz-linear-gradient(#2da1ec, #0191d9);
   	background-image: -ms-linear-gradient(#2da1ec, #0191d9);
   	background-image: linear-gradient(#2da1ec, #0191d9));
}

input[type="range"]::-webkit-slider-thumb:hover {
   background-image: -webkit-radial-gradient(#2eacff, #0191d9);
   background-image: -moz-radial-gradient(#2eacff, #0191d9);
   background-image: -ms-radial-gradient(#2eacff, #0191d9);
   background-image: radial-gradient(#2eacff, #0191d9);
}

input[type="range"]::-webkit-slider-thumb:active {
    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.3);
}

input.bigslider-in {
	width: 300px;
	height: 30px;
	border-radius: 30px;
}

input.bigslider-in::-webkit-slider-thumb {
	width: 30px;
	height: 30px;
}

input.smallslider-in {
	width: 200px;
	height: 15px;
	border-radius: 15px;
}

input.smallslider-in::-webkit-slider-thumb {
	width: 15px;
	height: 15px;
}

input.bigslider-out {
	width: 300px;
	height: 15px;
	border-radius: 15px;
}

input.bigslider-out::-webkit-slider-thumb {
	width: 30px;
	height: 30px;
}

input.smallslider-out {
	width: 200px;
	height: 10px;
	border-radius: 10px;
}

input.smallslider-out::-webkit-slider-thumb {
	width: 20px;
	height: 20px;
}



/* 
	And they lived happily ever after.
   
   	THE END
   
*/




</style>

</head>
<body>

<p>Welcome to Osiris Setup</p>

<p>Systems Requirements</p>
<table style="width:100%; table-layout:fixed;border:1px solid crimson;border-collapse:collapse;">
<tr><th>System Requirement</th><th>Your System</th><th>Status</th></tr>
<tr><td>Linux</td><td><?php echo php_uname();  ?></td><td class="ok">OK</td></tr>
<tr><td>PHP 5.4</td><td><?php echo phpversion(); ?></td><td class="ok">OK</td></tr>
<tr><td>PHP Mongo Driver 1.4.4</td><td><?php echo var_export(extension_loaded('Mongo'), true ) ; ?> </td><td class="ok">OK</td></tr>
<tr><td>Apache 2.2</td><td><?php echo apache_get_version(); ?></td><td class="ok">OK</td></tr>
<tr><td>Apache Module Rewrite</td><td><?php echo implode(' ', apache_get_modules()); ?></td><td class="ok">OK</td></tr>


<tr>
<td>Is Mongo Running?</td>
<td>
<?php $mc = MongoClient::getConnections(); echo implode(' ',$mc[0]['server']);

//echo shell_exec('ps -ef | grep mongo '); ?>
</td>
<td class="ok">OK
</td>
</tr>


</table>


<p>Settings
</p>
<table>
<tr><td>Blog Title</td><td>

<input type="text"></input>
</td></tr>


<tr><td>Superuser username</td><td>

<input type="text"></input>

</td></tr>


<tr><td>DB Name</td><td>

<input type="text"></input>

</td></tr>


<tr><td>DB Pass</td><td>

<input type="text"></input>

</td></tr>


<tr><td>DB Host</td><td>

<input type="text" value="localhost" readonly="readonly"></input>

</td></tr>



<tr><td>DB Path</td><td>

<input type="text" value="/data/db/osiris" readonly="readonly"></input>

</td></tr>


<tr><td>DB Log Path</td><td>

<input type="text" value="/var/log/mongo.log" readonly="readonly"></input>

</td></tr>







</table>


<p>MongoDB Setup</p>

<p><pre>
Check that mongod is running
Startup a forked mongod process with the following config:
dbpath /data/db/osiris
logpath /var/log/mongo.log
auth true
nohttpinterface
replSet osirisrs with config
{ id : "osirisrs", members : [
{ _id : 0, host : "localhost:27001" },
{ _id : 1, host : "localhost:27001" },
{ _id : 2, host : "localhost:27001" },
]
	}
Create a database named "osiris" requiring authentication
</pre>
</p>






































<p><input type="text"></input>
</p>








<p>Create a database user/pass 
<input type="text"></input>
</p>



<br /><br />
<p>
<a class="bigbtn">Create database</a>
</p>




































</body>
</html>

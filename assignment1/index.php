<!DOCTYPE html >
<html>
<head>
<title>frontend</title>
<style>
body{background-color:#0077B5}
#logo {
position:absolute;
left:42.5%;
top:2.48%;
width:12%;
height:9.33%;}

#make{
position:absolute;
left:30.57%;
top:8.5%;
color:#fff;
font-family:Arial;
}
#container{
position:absolute;
left:34.5%;
top:23%;
height:79%;
width:29.25%;
background-color:rgb(238,238,238);
text-align:center;
}
.yo{
	color:#66696a;
	font-size:12px;
	line-height:14px;
	text-align:left;
	margin-left:30px;
	margin-bottom:2px;
	z-index:2;
	font-family:Arial;
	margin-top:15px;
	border-top-color:rgb(102,105,106);
	border-right-color:rgb(102,105,106);
	border-left-color:rgb(102,105,106);
	border-bottom-color:rgb(102,105,106);
}
.hy{
	background-attachment:scroll;
	font-size:16px;
	box-sizing:border-box;
	height:32px;
	width:340px;
	z-index:4;
	display:inline-block;
	padding-left:6px;
	
}
#p05{
	color:#66696a;
	font-size:12px;
	line-height:14px;
	text-align:left;
	margin-left:30px;
	margin-bottom:2px;
	z-index:2;
	font-family:Arial;
	margin-top:15px;
	border-top-color:rgb(102,105,106);
	border-right-color:rgb(102,105,106);
	border-left-color:rgb(102,105,106);
	border-bottom-color:rgb(102,105,106);
	position:relative;
	left:30px;
	
}
a:link{
	text-decoration:none;
	color:black;
}
#submit1{
	font-size:16px;
	box-sizing:border-box;
	height:34px;
	width:340px;
	z-index:4;
	display:inline-block;
	padding-left:6px;
	margin-top:15px;
	background-color:rgb(38,114,174);
	color:white;
	font-family:Arial;
	font-weight:bold;
	border:1px solid rgb(27, 84, 128);
	border-radius:3px;
}
#p06{
	margin-top:20px;
}
#line1{
	position:absolute;
	left:30px;
	top:370px;
}
#line2{
	position:absolute;
	left:235px;
	top:370px;
}
#submit2{
	font-size:16px;
	box-sizing:border-box;
	height:34px;
	width:340px;
	z-index:4;
	display:inline-block;
	padding-left:6px;
	margin-top:1px;
	background-color:rgb(59,90,154);
	color:white;
	font-family:Arial;
	
	border:1px solid rgb(0, 45, 112);
	border-radius:3px;
}
#p07{
font-family:Arial;
position:relative;
top:0;
}
#p07 a:link{
	color:blue;
	}
#p08{
margin-top:30px;
margin-bottom:13px;
position:absolute;
top:99%;
left:42.46%;
font-family:Arial;
}
</style>
</head>
<body>
<img id="logo" src="abc.png"/>
<div id="make"><p style="font-size:180%;">Make the most of your professional life</p></div>
<div id="container">
<p class="yo" id="p01">First name</p>
<input class="hy" id="fname" type="text" required />
<p class="yo" id="p02">Last name</p>
<input class="hy" id="lname" type="text" required />
<p class="yo" id="p03">Email</p>
<input class="hy" id="email" type="email" required />
<p class="yo" id="p04">Password (6 or more characters)</p>
<input class="hy" id="pwd" type="password" required />
<p class="yo" id="p05">By clicking Join now, you agree to the LinkedIn <a href="#">User <br/>Agreement</a>,<a href="#"> Privacy Policy</a>, and<a href="#"> Cookie Policy.</a></p>

<input id="submit1" type="submit" value="Join now"/>
<div id="p06"><hr id="line1" width="33%"></hr><p style="color:grey;font-size:20px;">or</p><hr id="line2" width="33%"></hr></div>
<input id="submit2" type="submit" value="Continue with Facebook"/>
<p id="p07" style="font-size:16px;">Already on LinkedIn? <a href="#">Sign in</a></p>
</div>
<p id="p08" style="color:rgb(204,207,211);font-size:14px;">LinkedIn Corporation @ 2017</p>

</body>
</html>
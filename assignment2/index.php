<!DOCTYPE html>
<html>
<head>
<title>JAVASCRIPT TASK </title>
<style>
body{
	height:100%;
    margin:0;
	background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, grey, red); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, grey, red); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, grey, red); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right,grey,red);  /* Standard syntax */	
	background-repeat:no-repeat;
	background-attachment: fixed ;
	}
#validate {
	
	width:50%;
	     /*if width and height was inside then it will not be centered*/
	
	position:absolute;
	top:0;left:0;right:0;bottom:0;
	margin:auto;
	background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, red, blue); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, red, voilet) /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, red, voilet); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right,red, voilet);  /* Standard syntax */
	background-repeat:no-repeat;
	background-attachment: fixed ;
	opacity:.7;
	border:20px solid black;
	text-align:center;
}
	


 input[type="text"],input[type="email"],input[type="password"]{ 
 width: 50%; 
 height: 40px;
 box-sizing: border-box;
 border: 1px solid grey; 
 border-radius: 5px;
 } 

 input[type="submit"]{width: 37%; 
 height: 40px;
 box-sizing: border-box;
 border: 1px solid grey; 
 border-radius: 5px;
 } 
input[type="textarea"]{width: 50%; 
 height: 40px;
 box-sizing: border-box;
 border: 1px solid grey; 
 border-radius: 5px;
 } 
</style>

</head>
<body>
<div id="validate">
<form name="myform" id="myform" >
<p>
<b>First Name : </b><input type="text" size="50" maxlength="15" id="fname" name="fname" required ></input><br/><br/> 
<span class="error"><p id="fname_error"></p></span>
<b> Last Name : </b><input type="text" size="50" maxlength="15" id="lname" name="lname" required ></input><br/><br/> 
<span class="error"><p id="lname_error"></p></span>
<b>Email :</b>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" size="50" id="email" name="email" required ></input><br/><br/> 
<span class="error"><p id="email_error"></p></span>
<b>Password : </b>&nbsp&nbsp<input type="password" size="50"  id="pwd" name="pwd" required ></input><br/><br/>
 <span class="error"><p id="pwd_error"></p></span>
<b>Phone No : </b>&nbsp&nbsp<input type="text" size="50" id="pno" name="pno" required ></input><br/><br/> 
<span class="error"><p id="pno_error"></p></span>
<b>Task 2 : </b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="textarea" name="task2" id="task2" oninput="checkUser(this.value);" maxlength="150"><br/><br/>
<label id="maxReached" style="visibility: hidden; color:red"><b>Your title is too long</b></label><br/><br/>
 <input type="submit" value=" SUBMIT !"> 
</p>
</form>
</div>
<script>
document.getElementById("myform").onsubmit = function () {
    var x = document.forms["myform"]["fname"].value;
    var y = document.forms["myform"]["lname"].value;
    var z = document.forms["myform"]["email"].value;
	var a = document.forms["myform"]["pwd"].value;
	var b = document.forms["myform"]["pno"].value;
	var c = x.charAt(0)
	var d = y.charAt(0)
	var submit = true;

  if (x == null || x == "") {
        fnameError = "Please enter your First name";
        document.getElementById("fname_error").innerHTML = fnameError;
        submit = false;
    }

    if (y == null || y == "") {
        lnameError = "Please enter your Last name";
        document.getElementById("lname_error").innerHTML = lnameError;
        submit = false;
    }
   if (z == null || z == "") {
        emailError = "Please enter your Email";
        document.getElementById("email_error").innerHTML = emailError;
        submit = false;
    }
	
	re = /[A-Z]/;
	if(!re.test(c)){
	fnameError = "First name  must contain 1st letter as capital letter";
	document.getElementById("fname_error").innerHTML = fnameError;
	submit = false;
	}
	
	re = /[A-Z]/;
	if(!re.test(d)){
	lnameError = "Last name  must contain 1st letter as capital letter";
	document.getElementById("lname_error").innerHTML = lnameError;
	submit = false;
	}
	
	if (a.length>6){
	if(a.length<15){
	
		re = /[0-9]/;
		if(!re.test(a)){
	pwdError = "Password must contain at least one number betweeen (0-9)!";
	document.getElementById("pwd_error").innerHTML = pwdError;
	submit = false;
			
			
		}
		re = /[a-z]/;
		if(!re.test(a)){
	pwdError = "Password must contain at least one lower case letter (a-z)!";
	document.getElementById("pwd_error").innerHTML = pwdError;
	submit = false;
		
			
		}
		re = /[A-Z]/;
		if(!re.test(a)){
	pwdError = "Password must contain at least one upper case letter (A-Z)!";
	document.getElementById("pwd_error").innerHTML = pwdError;
	submit = false;
	
		
		}



    }else{
	pwdError = "Please enter maximum 15 character ";
	document.getElementById("pwd_error").innerHTML = pwdError;
	submit = false;
	}

	}else{
	pwdError = "Please enter atleast 6 character ";
	document.getElementById("pwd_error").innerHTML = pwdError;
	submit = false;}
	
	if(b.length!=10){
	pnoError = "Phone No must contain 10 number ";
	document.getElementById("pno_error").innerHTML = pnoError;
	submit = false;
}
	if(b.length=10){
		re = /[0-9]/;
		if(!re.test(b)){
	pnoError = "All input must be numeric";
	document.getElementById("pno_error").innerHTML = pnoError;
	submit = false;
			
			
		}
}

return submit;

}
function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("fname").onkeyup = removeWarning;
document.getElementById("lname").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("pwd").onkeyup = removeWarning;
document.getElementById("pno").onkeyup = removeWarning;






    function checkUser(user){
    var number = user.length;
    if(number>140){
    document.getElementById("task2").style.backgroundColor = "red";
   // <!-- document.getElementById("submit").disabled = true;  Disable submit button -->`enter code here`
document.getElementById("maxReached").style.visibility = "visible";
    }else {
document.getElementById("maxReached").style.visibility = "hidden";
document.getElementById("username").style.borderColor = "black";
    }
}
</script>
</body>
</html>
<?php session_start(); ?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">
  function isFname()
{
var alphaExp = /^[a-zA-Z]+$/;
  var fnamee=document.field.fname.value;
  var nalt2=document.getElementById('fname1');
  if(fnamee!="")
   {
      if(!fnamee.match(alphaExp))
      {
       nalt2.innerHTML="<font color='red'> Invalid Characters </font>";
       //document.field.fname.focus();
        document.field.fname.value="";
         return false; 	
       }
	   else
	   {
  		  nalt2.innerHTML="&#10004";
		    return true; 
        }
   }
  else  if(fnamee.length==0)
  {
   nalt2.innerHTML="<font color='red'> Invalid First Name</font>";
    //document.getElementById('fname').focus();
   return false;
  }

}
function isLname()
{
  var alphaExp1 = /^[a-zA-Z]+$/;
  var lnamee=document.field.lname.value;
  var nalt1=document.getElementById('lname1');
  if(lnamee!="")
   {
      if(!lnamee.match(alphaExp1))
      {
       nalt1.innerHTML="<font color='red'> Invalid Characters </font>";
       //document.field.lname.focus();
        document.field.lname.value="";
         return false; 	
       }
	   else
	   {
  		  nalt1.innerHTML="&#10004";
		    return true; 
        }
   }
  else  if(lnamee.length==0)
  {
   nalt1.innerHTML="<font color='red'> Invalid Last Name</font>";
    //document.getElementById('lname').focus();
   return false;
    }
  
}
function madeselection()
{
 var selct=document.getElementById('std');
  var salt=document.getElementById('std1'); 
 
  if(selct.value=="Please Select Class")
  {
    salt.innerHTML="<font color='red'> Choose Class</font>";
    //selct.focus();
   return false;
  }
  else
  { 
     return true;
  }
}
  function slctemp()
{
var saalt=document.getElementById('std1'); 
saalt.innerHTML="&#10004";
 }

function isBirthdate() 
 {
	var today = new Date();
	var d = today.getDate();
    var m = today.getMonth();
    var y = today.getFullYear();
	var birthdate=new Date(document.getElementById('dob').value);
	var dt = birthdate.getDate();
    var mn = birthdate.getMonth();
    var yr = birthdate.getFullYear();
	var diff=y-yr;
	if(diff<20)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'> Incorrect Date</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else if(diff>20)
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	else
	{
		document.getElementById('dob1').innerHTML = "<font color='red'>Must Select Date</font>";
		document.getElementById('dob').value ="";
	}
	
}

function isGender()
{
var choosen1=-1;
var selc1=document.getElementById('gender').value;
var len1=document.field.gender.length;
var saalt1=document.getElementById('gender1'); 
for(i=0;i<len1;i++)
{
	if (document.field.gender[i].checked)
	{
		choosen1 = document.field.gender[i].value;
	}
}
if(choosen!=-1)
{
saalt1.innerHTML="&#10004";
return true;
}
else
{
	saalt1.innerHTML="<font color='red'>Select Gender</font>";
	return false;
}
}

function isAddress()
{
  var alphaExp3 = /^[0-9 a-zA-Z,-.()/]+$/;
  var addr=document.field.add.value;
  var uadd=document.getElementById('add1');
  if(addr!="")
  {
	if(!addr.match(alphaExp3))
	{
    //document.field.user.focus();
    uadd.innerHTML="<font color='red'> Invalid Address</font>";
	addr="";
    return false;
	}
	else
	{
		uadd.innerHTML="&#10004";
		return true;
	} 
  }
  else
   {
	uadd.innerHTML="<font color='red'>Address is Required</font>";
	return false;
   }
 }
 
 function isLandline()
{
  var elem1=document.field.landline.value;
  var no=document.getElementById('landline1');
 if(elem1.length!=0)
 {
    var numericExpression1 = /^[0-9]+$/;
	 if(elem1.match(numericExpression1))
    {
		if(elem1.length>13)
		{
		no.innerHTML="<font color='red'> Invalid Number</font>";
		//document.field.mobile.focus();
		document.field.landline.value="";
		return false;
		}
		else if(elem1.length<10)
		{
		no.innerHTML="<font color='red'> Invalid Number</font>";
		//document.field.mobile.focus();
		document.field.landline.value="";
		return false;
		}
		else
		{
         no.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  no.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.mobile.focus();
	 	  document.field.landline.value="";
       return false;
	}
  }
  else if(elem1.length==0)
   {
	no.innerHTML="<font color='red'>Landline is Required</font>";
	return false;
   }
  }
  
function isEmail()
{
  var emal=document.field.email.value;
  var ealt=document.getElementById('email1');
  if(emal!="")
  {
    var emailExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([com\co\.\in])+$/;
    if(!emal.match(emailExp))
    {
	   //document.field.email.focus();
    
		ealt.innerHTML="<font color='red'> Invalid Email id </font>";
		 return false; 	
	  }
	  else
	  {
		 ealt.innerHTML="&#10004";
		//document.getElementById('email').focus();
		return true;
      }
    }    
 else if(emal.length==0)
 {
	ealt.innerHTML="<font color='red'> Invalid Email id</font>";
	return false; 
 }
}
function isUsername()
{
  var alphaExpu = /^[0-9a-z,._]+$/;
  var usernam=document.field.usrname.value;
  var usr=document.getElementById('usrname1');
  if(usernam!="")
  {
	if(!usernam.match(alphaExpu))
	{
		//document.field.usrname.focus();
		usr.innerHTML="<font color='red'> Invalid Username </font>";
		return false;
	}
	
   else if(usernam.length<5 || usernam.length>20)
   {
	usr.innerHTML="<font color='red'> Username must be between 5-20 characters </font>";
	return false;
   }
	else
	{
		usr.innerHTML="&#10004";
		return true;
	} 
  }
  else if(usernam.length==0)
   {
	usr.innerHTML="<font color='red'>Username is must </font>";
	return false;
   }
 }
 
 function password()
{
   var pawd1=document.getElementById('pwd').value;
   var palt=document.getElementById('pwd1');
 if(pawd1.length==0)
  {
    palt.innerHTML="<font color='red'> Password is must</font>";
    //document.getElementById('pwd').focus();
   return false;
  }
  else if(pawd1.length<6)
  {
	palt.innerHTML="<font color='red'> Password must be of greater than 5 characters</font>";
    //document.getElementById('pwd').focus();
   return false;
  }
  else if(pawd1.length>12)
  {
	palt.innerHTML="<font color='red'> Password must be of less than 13 characters</font>";
    //document.getElementById('pwd').focus();
   return false;
  }
 else
  {
    palt.innerHTML="&#10004";
    return true;
  }

}

function pass()
{
  var pawd2=document.getElementById('pwd').value;
  var pawdcon2=document.getElementById('rpwd').value;
  var palt1=document.getElementById('pwd1');
  var pcalt=document.getElementById('rpwd1');
  
 if(pawdcon2.length==0)  {
    pcalt.innerHTML="<font color='red'> Password Confirmation is must</font>";
    //pawdcon.focus();
   return false;
    }
   
 else if(pawd2!=pawdcon2)
  {
    pcalt.innerHTML="";
    palt1.innerHTML="<font color='red'> Password Mismatch</font>";
    return false;
  }
  else
  {
    palt1.innerHTML="&#10004";
    pcalt.innerHTML="&#10004";
    return true;
  }
}


  
  function chkform()
{   
	if(isFname())
	{
		if(isLname())
		{
			if(madeselection())
			{
				if(isBirthdate())
				{
				  if(isGender())
				  {
					if(isAddress())
					{
						if(isLandline())
						{
							if(isEmail())
							{
								if(isUsername())
								{
									if(password())
									{
										if(pass())
										{
										return true;
										}
										else
										{
										return false;
										}
									}
									else
									{
									return false;
									}
								}
								else
								{
								return false;
								}
							}
							else
							{
							return false;
							}
							
						}
						else
						{
							return false;
						}
					}	
					else
					{
					return false;
					}
				 }
				else
				{
				return false;
				}
			   }
			else
			{
			return false;
			}
		    }
		else
		{
		return false;
		}
	  }
	else
	{
	return false;
	}
  }
else
{
return false;
}
} 
  </script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>Online<span class="logo_colour"> Student Tracking System</span></h1>
          <h2>Simple and easy way to track your children's activities!!!!</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="login_success.php">Home</a></li>
            <li><a href="examples.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
	
          </ul>
        </div>
      </nav>
    </header>
     <div id="site_content">
	
      <div class="content">
        <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	$admin_id=$_SESSION['admin_id'];
	$_SESSION['admin_id']=$admin_id;
	
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['uname'];
	?>
	<h3 align="center">Enter Teacher Details</h3><br>
	<p><h2>All fields are mandatory.</h2></p>
	<div class="form_settings">
	<form name="field" action="addteacher1.php" method="post" onsubmit="return chkform()">
	<p><span style="float:left; width:150px;">First Name:</span><input type="text" name="fname" id="fname" onBlur="isFname()"/><span id=fname1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Last Name:</span> <input type="text" name="lname" id="lname" onBlur="isLname()"/><span id=lname1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Date Of Birth:</span> <input type="date" name="dob" id="dob" onBlur="isBirthdate()"/><span id=dob1 style="float:right;"></span></p>
	<p><span style="float:left; width:0px;">Gender:</span><input type="radio" name="gender" id="gender" value="Female" onblur="isGender()">Female
	&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Male" >Male<span id=gender1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Address:</span><textarea rows="3" cols="20" name="add" id="add" onBlur="isAddress()"/></textarea><span id=add1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Mobile No:</span><input type="text" name="landline" id="landline" onBlur="isLandline()"/><span id=landline1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Email-Id:</span><input type="text" name="email" id="email" onBlur="isEmail()"><span id=email1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Username:</span></span><input type="text" name="usrname" id="usrname" onBlur="isUsername()"><span id=usrname1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Password:</span><input type="password" name="pwd" id="pwd" onBlur="password()"><span id=pwd1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Re-enter Password:</span><input type="password" name="rpwd" id="rpwd"onBlur="pass()"><span id=rpwd1 style="float:right;" ></span></p>
	<p style="float:left;"><input class="reset" type="reset" name="reset" value="Reset"></p>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Add Teacher" /></h3>
	</form>
	</div>
    </div>
      <div id="sidebar_container">
        <div class="sidebar">
	<h4>Hello!!!!!!</h4>
	<?php
	echo "<h3>".$FirstName."</h3>";
	?>
          
        </div>
        <div class="sidebar">
          
        </div>

	<div class="sidebar">
          
        </div>
      </div>
    </div>
    <footer>
      <p>Tyagi Public School|Student Tracking System</p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>

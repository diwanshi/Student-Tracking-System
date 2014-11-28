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
  function isRollNo()
  {
	var elem=document.field.rollno.value;
  var nalt=document.getElementById('rollno1');
 if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>25)
		{
		nalt.innerHTML="<font color='red'>Not more than 25</font>";
		//document.field.cid.focus();
		document.field.rollno.value="";
		return false;
		}
		else
		{
         nalt.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.mobile.focus();
	 	  document.field.rollno.value="";
       return false;
	}
}
  else if(elem.length==0)
  {
		nalt.innerHTML="<font color='red'>RollNo is Must</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
}

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
	var classid=document.getElementById('std').value;
	var today = new Date();
	var d = today.getDate();
    var m = today.getMonth();
    var y = today.getFullYear();
	var birthdate=new Date(document.getElementById('dob').value);
	var dt = birthdate.getDate();
    var mn = birthdate.getMonth();
    var yr = birthdate.getFullYear();
	var diff=y-yr;
	if(classid==5)
	{
	if(diff<9 || diff>11)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 9 to 11</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==6)
	{
	if(diff<10 || diff>12)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 10 to 12</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==7)
	{
	if(diff<11 || diff>13)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 11 to 13</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==8)
	{
	if(diff<12 || diff>14)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 12 to 14</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==9)
	{
	if(diff<13 || diff>15)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 13 to 15</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==10)
	{
	if(diff<14 || diff>16)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 14 to 16</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==11)
	{
	if(diff<15 || diff>17)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 15 to 17</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
	}
	if(classid==12)
	{
	if(diff<16 || diff>18)
	{
	document.getElementById('dob1').innerHTML = "<font color='red'>Age must be between 16 to 18</font>";
	document.getElementById('dob').value ="";
	//document.field.dob.focus();
	return false;
	}
	else
	{
	document.getElementById('dob1').innerHTML = "&#10004";
	return true;
	}
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
  
  
  function chkform()
{
  if(isRollNo())   
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
	$sql2="select * from class";
	$result2= mysql_query($sql2);
	
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['uname'];
	?>
	<div class="form_settings">
	<p><h3>Enter Student Details</h3></p>
	<p><h2>All fields are mandatory.</h2></p>
	<form name="field" action="addstud1.php" method="post" onsubmit="return chkform()">
	<p><span style="float:left; width:150px;">Roll No:</span><input type="text" name="rollno" id="rollno" onBlur="isRollNo()"/><span id=rollno1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">First Name:</span><input type="text" name="fname" id="fname" onBlur="isFname()"/><span id=fname1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Last Name:</span> <input type="text" name="lname" id="lname" onBlur="isLname()"/><span id=lname1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Select Class:</span><select name="std" id="std" onchange="slctemp()" onBlur="madeselection()"><option>Please Select Class</option>
	<?php
	while ($row1 = mysql_fetch_array($result2))    
	{
		echo "<option value='" .$row1['class_id']. "'>" . $row1['class_name'] . "</option>";
	}
	?>
	</select><span id=std1 style="float:right;"></p><br>
	<p><span style="float:left; width:150px;">Date Of Birth:</span> <input type="date" name="dob" id="dob" onBlur="isBirthdate()"/><span id=dob1 style="float:right;"></span></p>
	
	<p><span style="float:left; width:0px;">Gender:</span><input type="radio" name="gender" id="gender" value="Female" onblur="isGender()">Female
	&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Male" >Male<span id=gender1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Address:</span><textarea rows="3" cols="20" name="add" id="add" onBlur="isAddress()"/></textarea><span id=add1  style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Landline No:</span><input type="text" name="landline" id="landline" onBlur="isLandline()"/><span id=landline1  style="float:right;"></span></p>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Add Student" /></h3>
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

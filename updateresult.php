<?php 	session_start(); ?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">
  function isNumeric1()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.eng.value;
  var nalt=document.getElementById('eng1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.eng.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.eng.value="";
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
		  //document.field.disc.focus();
	 	  document.field.eng.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.eng.value;
  var nalt=document.getElementById('eng1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.eng.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.eng.value="";
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
		  //document.field.disc.focus();
	 	  document.field.eng.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  function isNumeric2()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.hindi.value;
  var nalt=document.getElementById('hindi1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.hindi.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.hindi.value="";
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
		  //document.field.disc.focus();
	 	  document.field.hindi.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.hindi.value;
  var nalt=document.getElementById('hindi1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.hindi.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.hindi.value="";
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
		  //document.field.disc.focus();
	 	  document.field.hindi.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  function isNumeric3()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.maths.value;
  var nalt=document.getElementById('maths1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.maths.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.maths.value="";
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
		  //document.field.disc.focus();
	 	  document.field.maths.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.maths.value;
  var nalt=document.getElementById('maths1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.maths.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.maths.value="";
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
		  //document.field.disc.focus();
	 	  document.field.maths.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  function isNumeric4()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.sci.value;
  var nalt=document.getElementById('sci1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.sci.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sci.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sci.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.sci.value;
  var nalt=document.getElementById('sci1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.sci.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sci.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sci.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  function isNumeric5()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.sst.value;
  var nalt=document.getElementById('sst1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.sst.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sst.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sst.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.sst.value;
  var nalt=document.getElementById('sst1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.sst.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sst.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sst.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  
  function isNumeric6()
{
  var testid=document.field.elements['test'].value;
  if(testid==4 || testid==5)
  {
  var elem=document.field.sans.value;
  var nalt=document.getElementById('sans1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>100)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:100</font>";
		//document.field.disc.focus();
		document.field.sans.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sans.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sans.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
 }
  else if(testid>=1 && testid<=3)
  {
	var elem=document.field.sans.value;
  var nalt=document.getElementById('sans1');
  if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>30)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:30</font>";
		//document.field.disc.focus();
		document.field.sans.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sans.value="";
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
		  //document.field.disc.focus();
	 	  document.field.sans.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
	nalt.innerHTML="<font color='red'>Enter Marks</font>";
		  //document.field.disc.focus();
       return false;
  }
  }
  }
  
  
  function isAlphanumeric()
{
  var alphaExp3 = /^[0-9 a-zA-Z,-.()!]+$/;
  var add=document.field.remark.value;
  var uadd=document.getElementById('remark1');
  if(add!="")
  {
	if(!add.match(alphaExp3))
	{
    //document.field.user.focus();
    uadd.innerHTML="<font color='red'>Invalid Comment</font>";
	add="";
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
	uadd.innerHTML="<font color='red'>Enter Comment</font>";
	return false;
   }
 }
 
 
 function chkform()
 {
		if(isNumeric1())
		{
			if(isNumeric2())
			{
				if(isNumeric3())
				{
					if(isNumeric4())
					{
						if(isNumeric5())
						{
							if(isNumeric6())
							{
								if(isAlphanumeric())
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

	$tid=$_SESSION['t_id'];
	$sql1="select * from class_teachers where t_id='$tid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['usrname'];
	$_SESSION['testid']=$_POST['result'];
	$sid=$_POST['stud'];
	$test_id=$_SESSION['testid'];
	$_SESSION['s_id']=$sid;
	$sql="select * from result where s_id='$sid' and test_id='$test_id'";
	$result= mysql_query($sql);
	if($result)
	{
	$row=mysql_fetch_array($result);
	?>
	<div class="form_settings">
	<form name="field" action="submitupresult.php" method="post" onsubmit="return chkform()">
	<?php
	if($test_id==4 || $test_id==5)
	{
		echo '<input type="hidden" name="test" value="4" >';
	?>
	<p><span style="float:left; width:150px;">English:</span><input type="text" name="eng" id="eng" onBlur="isNumeric1()" value="<?php echo $row['english']; ?>"><span id=eng1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Hindi:</span> <input type="text" name="hindi" id="hindi" onBlur="isNumeric2()" value="<?php echo $row['hindi']; ?>"><span id=hindi1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Maths:</span> <input type="text" name="maths" id="maths" onBlur="isNumeric3()" value="<?php echo $row['maths']; ?>"><span id=maths1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Science:</span><input type="text" name="sci" id="sci" onBlur="isNumeric4()" value="<?php echo $row['science']; ?>"><span id=sci1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Social Studies:</span> <input type="text" name="sst" id="sst" onBlur="isNumeric5()" value="<?php echo $row['social_st']; ?>"><span id=sst1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Sanskrit:</span> <input type="text" name="sans" id="sans" onBlur="isNumeric6()" value="<?php echo $row['sanskrit']; ?>"><span id=sans1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Remark:</span> <input type="text" name="remark" id="remark" onBlur="isAlphanumeric()" value="<?php echo $row['remark']; ?>"><span id=remark1 style="float:right;"></span></p>
	<?php
	}
	else
	{
	echo '<input type="hidden" name="test" value="1" >';
	?>
	
	<p><span style="float:left; width:150px;">English:</span><input type="text" name="eng" id="eng" onBlur="isNumeric1()" value="<?php echo $row['english']; ?>"><span id=eng1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Hindi:</span> <input type="text" name="hindi" id="hindi" onBlur="isNumeric2()" value="<?php echo $row['hindi']; ?>"><span id=hindi1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Maths:</span> <input type="text" name="maths" id="maths" onBlur="isNumeric3()" value="<?php echo $row['maths']; ?>"><span id=maths1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Science:</span><input type="text" name="sci" id="sci" onBlur="isNumeric4()" value="<?php echo $row['science']; ?>"><span id=sci1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Social Studies:</span> <input type="text" name="sst" id="sst" onBlur="isNumeric5()" value="<?php echo $row['social_st']; ?>"><span id=sst1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Sanskrit:</span> <input type="text" name="sans" id="sans" onBlur="isNumeric6()" value="<?php echo $row['sanskrit']; ?>"><span id=sans1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Remark:</span> <input type="text" name="remark" id="remark" onBlur="isAlphanumeric()" value="<?php echo $row['remark']; ?>"><span id=remark1 style="float:right;"></span></p>
	<?php
	}
	?>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="sumbit" value="Submit Result"></p>
	
	</form>
	</div>
	<?php 
	}
	else
	{
		echo '<h3 align="center"> There is no such record to update. </h3>';
	}
	?>
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

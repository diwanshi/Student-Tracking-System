


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
  function isNumeric1()
{
  var elem=document.field.disc.value;
  var nalt=document.getElementById('disc1');
 if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem>10)
		{
		nalt.innerHTML="<font color='red'>Maximum Marks:10</font>";
		//document.field.disc.focus();
		document.field.disc.value="";
		return false;
		}
		else if(elem<0)
		{
		nalt.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.disc.value="";
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
	 	  document.field.disc.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
		nalt.innerHTML="<font color='red'>Enter Marks</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
  function isNumeric2()
{
  var elem1=document.field.alert.value;
  var nalt1=document.getElementById('alert1');
 if(elem1.length!=0)
 {
    var numericExpression1 = /^[0-9]+$/;
	 if(elem1.match(numericExpression1))
    {
		if(elem1>10)
		{
		nalt1.innerHTML="<font color='red'>Maximum Marks:10</font>";
		//document.field.disc.focus();
		document.field.alert.value="";
		return false;
		}
		else if(elem1<0)
		{
		nalt1.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.alert.value="";
		return false;
		}
		else
		{
         nalt1.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt1.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.disc.focus();
	 	  document.field.alert.value="";
       return false;
	}
  }
  else if(elem1.length==0)
  {
		nalt1.innerHTML="<font color='red'>Enter Marks</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
  function isNumeric3()
{
  var elem2=document.field.eca.value;
  var nalt2=document.getElementById('eca1');
 if(elem2.length!=0)
 {
    var numericExpression2 = /^[0-9]+$/;
	 if(elem2.match(numericExpression2))
    {
		if(elem2>10)
		{
		nalt2.innerHTML="<font color='red'>Maximum Marks:10</font>";
		//document.field.disc.focus();
		document.field.eca.value="";
		return false;
		}
		else if(elem2<0)
		{
		nalt2.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.eca.value="";
		return false;
		}
		else
		{
         nalt2.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt2.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.disc.focus();
	 	  document.field.eca.value="";
       return false;
	}
  }
  else if(elem2.length==0)
  {
		nalt.innerHTML="<font color='red'>Enter Marks</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
  function isNumeric4()
{
  var elem3=document.field.sport.value;
  var nalt3=document.getElementById('sport1');
 if(elem3.length!=0)
 {
    var numericExpression3 = /^[0-9]+$/;
	 if(elem3.match(numericExpression3))
    {
		if(elem3>10)
		{
		nalt3.innerHTML="<font color='red'>Maximum Marks:10</font>";
		//document.field.disc.focus();
		document.field.sport.value="";
		return false;
		}
		else if(elem3<0)
		{
		nalt3.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.sport.value="";
		return false;
		}
		else
		{
         nalt3.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt3.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.disc.focus();
	 	  document.field.sport.value="";
       return false;
	}
  }
  else if(elem3.length==0)
  {
		nalt3.innerHTML="<font color='red'>Enter Marks</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
  function isNumeric5()
{
  var elem4=document.field.att.value;
  var nalt4=document.getElementById('att1');
 if(elem4.length!=0)
 {
    var numericExpression4 = /^[0-9]+$/;
	 if(elem4.match(numericExpression4))
    {
		if(elem4>10)
		{
		nalt4.innerHTML="<font color='red'>Maximum Marks:10</font>";
		//document.field.disc.focus();
		document.field.att.value="";
		return false;
		}
		else if(elem4<0)
		{
		nalt4.innerHTML="<font color='red'>Minimum Marks:0</font>";
		//document.field.disc.focus();
		document.field.att.value="";
		return false;
		}
		else
		{
         nalt4.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt4.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.disc.focus();
	 	  document.field.disc.value="";
       return false;
	}
  }
  else if(elem4.length==0)
  {
		nalt4.innerHTML="<font color='red'>Enter Marks</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
  
  function isAlphanumeric()
{
  var alphaExp3 = /^[0-9 a-zA-Z,-.()!]+$/;
  var add=document.field.comm.value;
  var uadd=document.getElementById('comm1');
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
  else if(add.length==0)
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
	  <div class="form_settings">
        <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	$tid=$_SESSION['t_id'];
	$sid=$_POST['sid'];
	$_SESSION['s_id']=$sid;
	$month=$_POST['month'];
	$_SESSION['month']=$month;
	
	$_SESSION['t_id']=$tid;
	$sql1="select * from class_teachers where t_id='$tid'";
	$result1=mysql_query($sql1);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['usrname'];
	
	$sql="select * from performance where month='$month' and s_id='$sid'";
	$result= mysql_query($sql);
	
	if($result==true)
	{
		$row=mysql_fetch_array($result);
	?>
	
	
	<form name="field" action="submitupperf.php" method="post" onsubmit="return chkform()">

	<p><span style="float:left; width:150px;">Discipline</span><input type="text" name="disc" id="disc" value="<?php echo $row['discipline']; ?>" onBlur="isNumeric1()"><span id=disc1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Class Alertness:</span><input type="text" name="alert" id="alert" value="<?php echo $row['class_alert']; ?>"  onBlur="isNumeric2()"><span id=alert1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Ex Curr Activities:</span><input type="text" name="eca" id="eca" value="<?php echo $row['eca']; ?>" onBlur="isNumeric3()"><span id=eca1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Sports:</span><input type="text" name="sport" id="sport" value="<?php echo $row['sports']; ?>" onBlur="isNumeric4()"><span id=sport1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Attendance:</span><input type="text" name="att" id="att" value="<?php echo $row['attendance']; ?>" onBlur="isNumeric5()"><span id=att1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Comments:</span><input type="text" name="comm" id="comm" value="<?php echo $row['comments']; ?>" onBlur="isAlphanumeric()"><span id=comm1 style="float:right;"></span></p>
	
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Submit Performance"></p>
	</form>
    
	<?php
	}
	else
	{
		echo "<h3 align=center> There is no record for this student of selected month .</h3>";
	}
	?>
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

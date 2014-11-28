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
  function slctemp()
{
var choosen=-1;
var selc=document.getElementById('sid').value;
var len=document.field.sid.length;
var saalt=document.getElementById('sid1'); 
for(i=0;i<len;i++)
{
	if (document.field.sid[i].checked)
	{
		choosen = document.field.sid[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>You must select student</font>";
	return false;
}
}
function madeselection2()
{
 var selct=document.getElementById('month');
  var salt=document.getElementById('month1'); 
 
  if(selct.value=="Please Select Month")
  {
    salt.innerHTML="<font color='red'>Choose Month</font>";
    //selct.focus();
   return false;
  }
  else
  { 
	return true;
  }
}
  function slctemp2()
{
var saalt=document.getElementById('month1'); 
saalt.innerHTML="&#10004";
 }
 
 function chkform()
 {
	if(slctemp())
	{
		if(madeselection2())
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
	//$sid=$_SESSION['s_id'];
	$_SESSION['t_id']=$tid;
	$sql="select * from class_teachers where t_id='$tid'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$FirstName=$row['usrname'];
	
	$sql1="select s.s_id,s.fname,s.lname,s.roll_no,s.class_id,c.class_id,c.t_id from students s, class c where s.class_id=c.class_id and c.t_id='$tid' ";
	$result1= mysql_query($sql1);
	
	?>
	<div class="form_settings">
	<form name="field" action="updateperformance.php" method="post" onsubmit="return chkform()">
	<?php
	
	if($result1)
	{
	?>
	<table border="5" style="margin-left:auto; margin-right:auto;">
	<caption><h3>Please Select Student</h3><span  id=sid1 style="float:right; font-size:20;"></span></caption>
	<tr><td></td><td>Student_Id</td><td>Student_Name</td><td>Roll_No</td></tr>
	
	<?php
	while ($row1= mysql_fetch_array($result1))    
	{
		
		echo "<tr><td>";
		echo '<input type="radio" name="sid" value="'.$row1['s_id'].'" id="sid" onBlur="slctemp()" /></td>';
		echo "<td>" .$row1['s_id']."</td>";
		echo "<td>" .$row1['fname']." ".$row1['lname']."</td>";
		echo "<td>" .$row1['roll_no']."</td>";
		echo "</tr><br>";
		
	}
	echo "</table>";
	}
	?>
	<p><span style="float:left; width:150px;">Select Month</span><select name="month" id="month" onchange="slctemp2()" onBlur="madeselection2()">
	<option>Please Select Month</option>
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
	</select><span id=month1 style="float:right;"></span></p>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Update"></p>
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

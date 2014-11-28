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
var selc=document.getElementById('stud').value;
var len=document.field.stud.length;
var saalt=document.getElementById('stud1'); 
for(i=0;i<len;i++)
{
	if (document.field.stud[i].checked)
	{
		choosen = document.field.stud[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You must select student</font>";
	return false;
}
}

function chkform()
{
	if(slctemp())
	{
		return true;
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
	?>
	<div class="form_settings">
	<form name="field" action="changestastud1.php" method="post" onsubmit="return chkform()">
	<?php
	$admin_id=$_SESSION['admin_id'];
	$_SESSION['admin_id']=$admin_id;
	
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row1=mysql_fetch_array($result);
	$FirstName=$row1['uname'];
	
	$sql1="select s.*,c.class_name,c.class_id from students s,class c where s.class_id=c.class_id and s.s_status<>0";
	$result1= mysql_query($sql1);
	?>
	<span  id=stud1 style="float:center; font-size:20;"></span>
	<table border="5" style="margin-left:auto; margin-right:auto;">
	<caption><h3>Please select Student</h3></caption>
	<?php
	echo "<tr><td>Select</td><td>Id</td><td>Name</td><td>RollNo</td><td>Class</td><td>Date Of Birth</td><td>Gender</td><td>Address</td><td>Status</td></tr>";
	while ($row = mysql_fetch_array($result1))    
	{
		echo "<tr><td>";
		echo '<h3 align="center"><input type="radio" name="stud" id="stud" value="'.$row['s_id'].' onBlur="slctemp()" ></h3></td>';
		echo "<td>" .$row['s_id']."</td>";
		echo "<td>" .$row['fname']." ".$row['lname']."</td>";
		echo "<td>" .$row['roll_no']."</td>";
		echo "<td>" .$row['class_name']."</td>";
		echo "<td>" .$row['dob']."</td>";
		echo "<td>" .$row['gender']."</td>";
		echo "<td>" .$row['address']."</td>";
		echo "<td>" .$row['s_status']."</td></tr><br>";
	}
	?>
	</table>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="deactivate" value="Deactivate"></p>
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

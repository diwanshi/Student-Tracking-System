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
var selc=document.getElementById('teach').value;
var len=document.field.teach.length;
var saalt=document.getElementById('teach1'); 
for(i=0;i<len;i++)
{
	if (document.field.teach[i].checked)
	{
		choosen = document.field.teach[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You must select teacher</font>";
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
	<form name="field" action="changestateacher1.php" method="post" onsubmit="return chkform()">
	<?php
	$admin_id=$_SESSION['admin_id'];
	$_SESSION['admin_id']=$admin_id;
	$sql1="select * from class_teachers where t_status=0 or t_status=1";
	$result1= mysql_query($sql1);
	
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row1=mysql_fetch_array($result);
	$FirstName=$row1['uname'];
	?>
	
	<span  id=teach1 style="float:center; font-size:20;"></span>
	<table border="5" style="margin-left:auto; margin-right:auto;">
	<caption><h3>Please select Teacher</h3></caption>
	<?php
	echo "<tr><td>Select</td><td>Id</td><td>Name</td><td>Date Of Birth</td><td>Gender</td><td>Address</td><td>Status</td></tr>";
	while ($row = mysql_fetch_array($result1))    
	{
		echo "<tr><td>";
		echo '<h3 align="center"><input type="radio" name="teach" id="teach" value="'.$row['t_id'].'" onBlur="slctemp()"></h3></td>';
		echo "<td>" .$row['t_id']."</td>";
		echo "<td>" .$row['t_fname']." ".$row['t_lname']."</td>";
		echo "<td>" .$row['t_dob']."</td>";
		echo "<td>" .$row['t_gender']."</td>";
		echo "<td>" .$row['t_address']."</td>";
		echo "<td>" .$row['t_status']."</td></tr><br>";
	}
	?>
	</table>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="activate" value="Activate"></p>
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

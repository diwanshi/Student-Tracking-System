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
function madeselection()
{
 var selct=document.getElementById('std');
  var salt=document.getElementById('std1'); 
 
  if(selct.value=="Please Select Class")
  {
    salt.innerHTML="<font color='red'>Choose Class</font>";
    //selct.focus();
   return false;
  }
  else
  { 
	return true;
  }
}
  function slctemp1()
{
var saalt=document.getElementById('std1'); 
saalt.innerHTML="&#10004";
 }

function chkform()
{
	if(slctemp())
	{
		if(madeselection())
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
	$sql="select * from class where t_id IS NULL";
	$result = mysql_query($sql);
	?>
	<div class="form_settings">
	<form name="field" action="exclass1.php" method="post" onsubmit="return chkform()">
	<?php
	
	$admin_id=$_SESSION['admin_id'];
	$_SESSION['admin_id']=$admin_id;
	$sql3="select * from admin where admin_id=$admin_id";
	$result3=mysql_query($sql3);
	$row3=mysql_fetch_array($result3);
	$FirstName=$row3['uname'];
	
	
	$sql1="select * from class_teachers where t_status<>2 and t_status<>0";
	$result1= mysql_query($sql1);
	
	echo '<p><span style="float:left; width:150px;">Select Class</span><select name="std" id="std" onchange="slctemp1()" onBlur="madeselection()" ><option>Please Select Class</option>';
	while($row1=mysql_fetch_array($result))
	{
		echo "<option value='" .$row1['class_id']. "'>" . $row1['class_name'] . "</option>";
	}
	?>
	</select><span id=std1 style="float:right;"></span></p>
	<table border="5" style="margin-left:auto; margin-right:auto;">
	<caption><h3>Please Select Teacher</h3><span  id=teach1 style="float:right; font-size:20;"></span></caption>
	<?php
	echo "<tr><td>Select</td><td>Id</td><td>Name</td><td>Date Of Birth</td><td>Gender</td><td>Address</td></tr>";
	while ($row = mysql_fetch_array($result1))    
	{
		echo "<tr><td>";
		echo '<input type="radio" name="teach" value="'.$row['t_id'].'" id="teach" onBlur="slctemp()"></td>';
		echo "<td>" .$row['t_id']."</td>";
		echo "<td>" .$row['t_fname']." ".$row['t_lname']."</td>";
		echo "<td>" .$row['t_dob']."</td>";
		echo "<td>" .$row['t_gender']."</td>";
		echo "<td>" .$row['t_address']."</td></tr><br>";
	} ?>
	
	</table>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="sumbit" value="Assign"></p>
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

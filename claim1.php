<?php session_start();?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">
  function slctemp1()
{
var choosen=-1;
//var selc=document.getElementById('stud').value;
var len=document.field2.stud.length;
var saalt=document.getElementById('stud1'); 
for(i=0;i<len;i++)
{
	if (document.field2.stud[i].checked)
	{
		choosen = document.field2.stud[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>Select Student</font>";
	return false;
}
}
function chkform2()
{
	if(slctemp1())
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
	$p_id=$_SESSION['p_id'];
	$_SESSION['p_id']=$p_id;
	$sql2="select * from parents where p_id='$p_id'";
	$result2=mysql_query($sql2)or die(mysql_error);
	$row2=mysql_fetch_array($result2);
	$FirstName=$row2['username'];
	?>
	<div class="form_settings">
	<form name="field2" action="auth.php" method="post" onsubmit="return chkform2()">

	<table border="5" style="margin-left:auto; margin-right:auto;">
	<caption><h3>Please select Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  id=stud1 style="float:center; font-size:20;"></span></h3></caption>
	
	<?php
	
	$class_id=$_POST['class_id'];
	$sql1="select * from students where class_id='$class_id'";
	$result1= mysql_query($sql1);
	echo "<tr><td>Select</td><td>Student_Id</td><td>Student_Name</td><td>Date Of Birth</td><td>Landline No</td></tr>";
	while ($row = mysql_fetch_array($result1))    
	{
		
		echo "<tr><td>";
		echo '<input type="radio" name="stud" value="'.$row['s_id'].'" onBlur="slctemp1()"></td>';
		echo "<td>" .$row['s_id']."</td>";
		echo "<td>" .$row['fname']." ".$row['lname']."</td>";
		echo "<td>" .$row['dob']."</td>";
		echo "<td>" .$row['landline_no']."</td></tr><br>";
	}
	?>

	</table>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="sumbit" value="Claim"></p>
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

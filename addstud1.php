<!DOCTYPE HTML>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
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
	
      <div class="content"><br><br><br><br><br><br>
        <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
		session_start();
		$adminid=$_SESSION['admin_id'];
		$classid=$_POST['std'];
		$rollno=$_POST['rollno'];
		$f_name=$_POST['fname'];
		$l_name=$_POST['lname'];
		$gen=$_POST['gender'];
		$d_o_b=$_POST['dob'];
		$add=$_POST['add'];
		$landline=$_POST['landline'];
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	
	$sql3="select * from admin where admin_id=$adminid";
	$result3=mysql_query($sql3);
	$row3=mysql_fetch_array($result3);
	$FirstName=$row3['uname'];
	
	$sql1="select roll_no,class_id from students where roll_no='$rollno' and class_id='$classid'";
	$result1=mysql_query($sql1);
	$count=mysql_num_rows($result1);
	if($count==0)
	{
		
	$sql="insert into students(roll_no,fname,lname,gender,dob,address,landline_no,class_id,s_status) values('$rollno','$f_name','$l_name','$gen','$d_o_b','$add','$landline','$classid',1)";
	$result=mysql_query($sql);
	if($result)
	{
		echo '<h3 align="center">Student Added Successfully</h3>';
	}
	}
	else
	{
	?>
	<h3 align="center">The Student with this RollNo and Class already exists!!!</h3>
	<h3 align="center"><a href="addstud.php">Try Again!!!</a></h3>
	<?php
	}
	?>
    </div>
      <div id="sidebar_container">
        <div class="sidebar">
	<h4>Hello!!!!!!</h4>
	<?php
	echo "<h3>".$FirstName."</h3>";
	//session_start();
	//session_destroy();
	//header('location:login_success.php');
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

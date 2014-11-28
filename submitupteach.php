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
		$admin_id=$_SESSION['admin_id'];
		$tid=$_SESSION['t_id'];
		$email=$_POST['email'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gen=$_POST['gen'];
		$d_o_b=$_POST['ndob'];
		$add=$_POST['add'];
		$mobile=$_POST['mob'];
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	if(isset($fname)==1)
	{
		$sql="update class_teachers set t_fname='$fname' where t_id='$tid' ";
		$result=mysql_query($sql);
	}
	if(isset($_POST['lname']))
	{
		$sql1="update class_teachers set t_lname='$lname' where t_id='$tid' ";
		$result1=mysql_query($sql1);
	}
	if(isset($_POST['email']))
	{
		$sql2="update class_teachers set email='$email' where t_id='$tid' ";
		$result2=mysql_query($sql2);
	}
	if(isset($_POST['gen']))
	{
		$sql3="update class_teachers set t_gender='$gen' where t_id='$tid' ";
		$result3=mysql_query($sql3);
	}
	if(isset($_POST['ndob']))
	{
		$sql4="update class_teachers set t_dob='$d_o_b' where t_id='$tid' ";
		$result4=mysql_query($sql4);
	}
	if(isset($_POST['add']))
	{
		$sql5="update class_teachers set t_address='$add' where t_id='$tid' ";
		$result5=mysql_query($sql5);
	}
	if(isset($_POST['mob']))
	{
		$sql6="update class_teachers set t_mobile='$mobile' where t_id='$sid' ";
		$result6=mysql_query($sql6);
	}
	if(isset($_POST['uname']))
	{
		$sql6="update class_teachers set usrname='$uname' where t_id='$tid' ";
		$result6=mysql_query($sql6);
	}
	if(isset($_POST['pwd']))
	{
		$sql7="update class_teachers set pswrd='$pwd' where t_id='$tid' ";
		$result7=mysql_query($sql7);
	}
	
	if($result || $result1 || $result2 || $result3 || $result4 || $result5 || $result6 || $result7)
	{
		echo "<h3 align=center> Teacher details updated Successfully!!!</h3>";
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

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
		$sid=$_SESSION['s_id'];
		$rno=$_POST['rno'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gen=$_POST['gen'];
		$d_o_b=$_POST['ndob'];
		$add=$_POST['add'];
		$landline=$_POST['landline'];
		$class=$_POST['class_id'];
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	$sqlq="select roll_no,class_id,s_status from students where roll_no='$rno' and class_id='$class' ";
	$resultq=mysql_query($sqlq);
	$count=mysql_num_rows($resultq);
	if($count==0)
	{
	if(isset($rno)==1)
	{
		$sql="update students set roll_no='$rno' where s_id='$sid' ";
		$result=mysql_query($sql);
	}
	if(isset($_POST['fname']))
	{
		$sql1="update students set fname='$fname' where s_id='$sid' ";
		$result1=mysql_query($sql1);
	}
	if(isset($_POST['lname']))
	{
		$sql2="upupdate students set lname='$lname' where s_id='$sid' ";
		$result2=mysql_query($sql2);
	}
	if(isset($_POST['gen']))
	{
		$sql3="update students set gender='$gen' where s_id='$sid' ";
		$result3=mysql_query($sql3);
	}
	if(isset($_POST['ndob']))
	{
		$sql4="update students set dob='$d_o_b' where s_id='$sid' ";
		$result4=mysql_query($sql4);
	}
	if(isset($_POST['add']))
	{
		$sql5="update students set address='$add' where s_id='$sid' ";
		$result5=mysql_query($sql5);
	}
	if(isset($_POST['landline']))
	{
		$sql6="update students set landline_no='$landline' where s_id='$sid' ";
		$result6=mysql_query($sql6);
	}
	if(isset($_POST['class_id']))
	{
		$sql6="update students set class_id='$class' where s_id='$sid' ";
		$result6=mysql_query($sql6);
	}
	
	if($result || $result1 || $result2 || $result3 || $result4 || $result5 || $result6 || $result7)
	{
		echo "<h3 align=center> Student details updated Successfully!!!</h3>";
	}
	}
	else
	{
		echo "<h3 align=center>The Student with this RollNo and Class already exists!!!</h3>";
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

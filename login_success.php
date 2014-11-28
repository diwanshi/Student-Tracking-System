<?php session_start(); ?>
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
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);

	
	$role=$_SESSION['role'];
	settype($role, "integer");
	if($role==1)
	{
	if (isset($_SESSION['admin_id'])==0)
	{
	header('location:index.html');
	}
	else
	{

	$admin_id=$_SESSION['admin_id'];
	//$_SESSION['admin_id']=$admin_id;
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['uname'];
	}
	?>
		 <a href="seeclaimrequest.php"><h3 align="center">See Student Claim Requests</h3></a>
		 <a href="searchstud.php"><h3 align="center">Search Student</h3></a>
		 <a href="searchauthstud.php"><h3 align="center">Search Authorized Student</h3></a>
		 <a href="searchteacher.php"><h3 align="center">Search Teacher</h3></a>
		 <a href="addstud.php"><h3 align="center">Add Student</h3></a>
		 <a href="addclass.php"><h3 align="center">Assign Teacher to New Class</h3></a>
		 <a href="exclass.php"><h3 align="center">Assign Teacher to Existing Class</h3></a>
		 <a href="addteacher.php"><h3 align="center">Add Teacher</h3></a>
		 <a href="updatestud.php"><h3 align="center">Update Student</h3></a>
		 <a href="updateteacher.php"><h3 align="center">Update Teacher</h3></a>
		 <a href="changestastud.php"><h3 align="center">Deactivate Student</h3></a>
		 <a href="changestateacher.php"><h3 align="center">Activate/Deactivate Teacher</h3></a>
	<?php
	}
	if($role==2)
	{
	if (isset($_SESSION['p_id'])==0)
	{
		header('location:index.html');
	}
	else
	{

	$p_id=$_SESSION['p_id'];
	$sql="select * from parents where p_id='$p_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['username'];
	}
	?>
	
		 <a href="claim.php"><h3 align="center">Claim Student</h3></a><br>
		 <a href="trackrequest.php"><h3 align="center">Track Claim Request</h3></a><br>
		 <a href="result2.php"><h3 align="center">View Result</h3></a><br>
		 <a href="performance2.php"><h3 align="center">View Performance</h3></a><br>
		 <a href="sendapp.php"><h3 align="center">Send Application</h3></a>
		
	<?php
	}
	
	if($role==3)
	{
	if (isset($_SESSION['t_id'])==0)
	{
	header('location:index.html');
	}
	else
	{

	$t_id=$_SESSION['t_id'];
	$sql="select * from class_teachers where t_id='$t_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['usrname'];
	}
	?>
		 <a href="entresult.php"><h3 align="center">Enter Result</h3></a><br>
		 <a href="updateres.php"><h3 align="center">Update Result</h3></a><br>
		 <a href="entperformance.php"><h3 align="center">Enter Monthly Performance</h3></a><br>
		  <a href="updateperf.php"><h3 align="center">Update Monthly Performance</h3></a><br>
		 <a href="seeapp.php"><h3 align="center">See Application</h3></a>
		
	<?php
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

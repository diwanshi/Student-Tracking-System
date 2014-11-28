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
		$sid=$_SESSION['s_id'];
		$tid=$_SESSION['t_id'];
		$month=$_SESSION['month'];
		$disc=$_POST['disc'];
		$alert=$_POST['alert'];
		$eca=$_POST['eca'];
		$sports=$_POST['sport'];
		$att=$_POST['att'];
		$comm=$_POST['comm'];
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	
	$sql0="select * from class_teachers where t_id='$tid'";
	$result0=mysql_query($sql0);
	$row0=mysql_fetch_array($result0);
	$FirstName=$row0['usrname'];

	if(isset($disc)==1)
	{
		$sql="update performance, students set performance.discipline='$disc' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid' ";
		$result=mysql_query($sql);
	}
	if(isset($_POST['alert']))
	{
		$sql1="update performance, students set performance.class_alert='$alert' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid'";
		$result1=mysql_query($sql1);
	}
	if(isset($_POST['eca']))
	{
		$sql2="update performance, students set performance.eca='$eca' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid'";
		$result2=mysql_query($sql2);
	}
	if(isset($_POST['sport']))
	{
		$sql3="update performance, students set performance.sports='$sports' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid'";
		$result3=mysql_query($sql3);
	}
	if(isset($_POST['att']))
	{
		$sql4="update performance, students set performance.attendance='$att' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid'";
		$result4=mysql_query($sql4);
	}
	if(isset($_POST['comm']))
	{
		$sql5="update performance, students set performance.comments='$comm' where performance.s_id=students.s_id and performance.month='$month' and performance.s_id='$sid'";
		$result5=mysql_query($sql5);
	}
	
	
	if($result || $result1 || $result2 || $result3 || $result4 || $result5)
	{
		echo "<h3 align=center> Performance updated Successfully</h3>";
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

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
		$sid=$_POST['stud'];
		$tid=$_SESSION['t_id'];
		$test_id=$_SESSION['test_id'];
		$eng=$_POST['eng'];
		$hindi=$_POST['hindi'];
		$maths=$_POST['maths'];
		$sci=$_POST['sci'];
		$sst=$_POST['sst'];
		$sans=$_POST['sans'];
		$rem=$_POST['remark'];
		$total=$eng+$hindi+$maths+$sci+$sst+$sans;
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	
	$sql1="select * from class_teachers where t_id='$tid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['usrname'];
			
	$sql="insert into result(s_id,test_id,english,hindi,maths,science,social_st,sanskrit,total,remark) values('$sid','$test_id','$eng','$hindi','$maths','$sci','$sst','$sans','$total','$rem')";
	$result = mysql_query($sql);
	if($result)
	{
		echo "<h3 align=center> Result submitted Successfully</h3>";
	}
	else
	{
		echo "<h3 align=center>Something wrong must have happened</h3>";
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

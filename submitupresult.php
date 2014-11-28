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
		
		$testid=$_SESSION['testid'];
		$sid=$_SESSION['s_id'];
		$engl=$_POST['eng'];
		$hindi=$_POST['hindi'];
		$maths=$_POST['maths'];
		$science=$_POST['sci'];
		$sst=$_POST['sst'];
		$sanskrit=$_POST['sans'];
		$remark=$_POST['remark'];
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	$tid=$_SESSION['t_id'];
	$sq="select * from class_teachers where t_id='$tid'";
	$resul=mysql_query($sq)or die(mysql_error);
	$ro=mysql_fetch_array($resul);
	$FirstName=$ro['usrname'];
	if(isset($engl)==1)
	{
		$sql="update result,students,test set result.english='$engl' where result.s_id=students.s_id and result.test_id=test.test_id and result.s_id='$sid' and result.test_id='$testid' ";
		$result=mysql_query($sql);
	}
	if(isset($_POST['hindi']))
	{
		$sql1="update result set hindi='$hindi' where s_id='$sid' and test_id='$testid'";
		$result1=mysql_query($sql1);
	}
	if(isset($_POST['maths']))
	{
		$sql2="update result set maths='$maths' where s_id='$sid' and test_id='$testid'";
		$result2=mysql_query($sql2);
	}
	if(isset($_POST['science']))
	{
		$sql3="update result set science='$science' where s_id='$sid' and test_id='$testid'";
		$result3=mysql_query($sql3);
	}
	if(isset($_POST['sst']))
	{
		$sql4="update result set social_st='$sst' where s_id='$sid' and test_id='$testid'";
		$result4=mysql_query($sql4);
	}
	if(isset($_POST['sanskrit']))
	{
		$sql5="update result set sanskrit='$sanskrit' where s_id='$sid' and test_id='$testid'";
		$result5=mysql_query($sql5);
	}
	if(isset($_POST['remark']))
	{
		$sql6="update result set remark='$remark' where s_id='$sid' and test_id='$testid'";
		$result6=mysql_query($sql6);
	}
	$total=$engl+$hindi+$maths+$science+$sst+$sanskrit;
	
	$sql7="update result set total='$total' where s_id='$sid' and test_id='$testid'";
	$result7=mysql_query($sql7);
	
	
	if($result || $result1 || $result2 || $result3 || $result4 || $result5 || $result6 || $result7)
	{
		echo "<h3 align=center> Result updated Successfully</h3>";
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

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
            <li><a href="index.html">Home</a></li>
            <li><a href="examples.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="content">
    <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
	
	
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);

	// username and password sent from form
	//NEVER Remove the mysql_real_escape_string. Else there could be an Sql-Injection!
	$myusername=mysql_real_escape_string($_POST['ad_uname']);
	$mypassword=mysql_real_escape_string($_POST['ad_pwd']);

	if(isset($_POST["role"])==1)
	{
		$x=$_POST['role'];
		settype($x, "integer");
		if($x==1)
		{
		
		$sql="SELECT * FROM admin WHERE uname='$myusername' AND pwd='$mypassword' AND status=1 ";
		$result=mysql_query($sql);

		// Replace counting function based on database you are using.
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		$row=mysql_fetch_array($result);

			if ($count==1)
			{
			session_start();
			$_SESSION['admin_id']=$row['admin_id'];
			$_SESSION['role']=1;
			header('location:login_success.php');
			}
			else
			{
			echo "<h3>Wrong username or password!!!</h3>";
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
			}
		}
	
		if($x==2)
		{
		$sql="SELECT * FROM parents WHERE username='$myusername' AND password='$mypassword' ";
		$result=mysql_query($sql);

		// Replace counting function based on database you are using.
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		$row=mysql_fetch_array($result);

			if ($count==1)
			{
			session_start();
			$_SESSION['p_id']=$row['p_id'];
			$_SESSION['role']=2;
			header('location:login_success.php');
			}
			else
			{
			echo "<h3>Wrong username or password</h3>!!!";
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
			}
		}

		if($x==3)
		{
		$sql="SELECT * FROM class_teachers WHERE usrname='$myusername' AND pswrd='$mypassword' AND t_status IN(1,2)";
		$result=mysql_query($sql);

		// Replace counting function based on database you are using.
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		$row=mysql_fetch_array($result);

			if ($count==1)
			{
			session_start();
			$_SESSION['t_id']=$row['t_id'];
			$_SESSION['role']=3;
			header('location:login_success.php');
			}
			else
			{
			echo "<h3>Wrong username or password!!!</h3>";
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
			}
		}
	}

	?>

      
    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
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

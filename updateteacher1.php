


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
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$_SESSION['admin_id']=$admin_id;
	$tid=$_POST['teach'];
	$_SESSION['t_id']=$tid;
	$sql="select * from class_teachers where t_id='$tid'";
	$result= mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	echo '<form action="submitupteach.php" method="post">';
	?>
	<h3 align="center">First Name<input type="text" name="fname" value=" <?php echo $row['t_fname']; ?> " ></h3><br>
	<h3 align="center">Last Name<input type="text" name="lname" value=" <?php echo $row['t_lname']; ?> " ></h3><br>
	<h3 align="center">Gender<input type="text" name="gender" value=" <?php echo $row['t_gender']; ?> " ></h3><br>
	<h3 align="center">Choose New Gender &nbsp;<input type="radio" name="gen" value="Male" >Male <input type="radio" name="gen" value="Female" >Female</h3><br>
	<h3 align="center">Date Of Birth<input type="text" name="dob" value=" <?php echo $row['t_dob']; ?> " ></h3><br>
	<h3 align="center">Choose New Date Of Birth<input type="date" name="ndob" /></h3><br>
	<h3 align="center">Address<textarea name="add" rows="3" cols="20"><?php echo $row['t_address']; ?> </textarea></h3><br>
	<h3 align="center">Mobile No<input type="text" name="mob" value=" <?php echo $row['t_mobile']; ?> " ></h3><br>
	<h3 align="center">Email Id<input type="text" name="email" value=" <?php echo $row['email']; ?> " ></h3><br>
	<h3 align="center">Username<input type="text" name="uname" value=" <?php echo $row['usrname']; ?> " ></h3><br>
	<h3 align="center">Password<input type="text" name="pwd" value=" <?php echo $row['pswrd']; ?> " ></h3><br>
	<input type="submit" name="submit" value="Submit" />
	</form>
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





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
	$sid=$_POST['stud'];
	$_SESSION['s_id']=$sid;
	$sql="select * from students where s_id='$sid'";
	$result= mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	$sql1="select * from class";
	$result1=mysql_query($sql1);
	
	echo '<form action="submitupstud.php" method="post">';
	?>
	<h3 align="center">Roll No<input type="text" name="rno" value=" <?php echo $row['roll_no']; ?> " ></h3><br>
	<h3 align="center">First Name<input type="text" name="fname" value=" <?php echo $row['fname']; ?> " ></h3><br>
	<h3 align="center">Last Name<input type="text" name="lname" value=" <?php echo $row['lname']; ?> " ></h3><br>
	<h3 align="center">Gender<input type="text" name="gender" value=" <?php echo $row['gender']; ?> " ></h3><br>
	<h3 align="center">Choose New Gender &nbsp;<input type="radio" name="gen" value="Male" >Male <input type="radio" name="gen" value="Female" >Female</h3><br>
	<h3 align="center">Date Of Birth<input type="text" name="dob" value=" <?php echo $row['dob']; ?> " ></h3><br>
	<h3 align="center">Choose New Date Of Birth<input type="date" name="ndob" /></h3><br>
	<h3 align="center">Address<textarea name="add" rows="3" cols="10"><?php echo $row['address']; ?> </textarea></h3><br>
	<h3 align="center">LandlineNo<input type="text" name="landline" value=" <?php echo $row['landline_no']; ?> " ></h3><br>
	<h3 align="center">Class<input type="text" name="cname" value=" <?php echo $row['class_id']; ?> " ></h3><br>
	<h3 align="center">Choose New Class<select name='class_id'></h3>
	<?php
	while ($row1 = mysql_fetch_array($result1))    
	{
		echo "<option value='" . $row1['class_id'] . "'>" . $row1['class_name'] . "</option>";
	}
	echo "</select>";
	?>
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

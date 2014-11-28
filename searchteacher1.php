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
	
      <div class="content">
        <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	
	$admin_id=$_SESSION['admin_id'];
	$sql="select * from admin where admin_id='$admin_id'";
	$result=mysql_query($sql)or die(mysql_error);
	$row1=mysql_fetch_array($result);
	$FirstName=$row1['uname'];
	
	$class_id=$_POST['class_id'];
	$sql1="select t.*,c.* from class_teachers t,class c where t.t_id=c.t_id and c.class_id='$class_id' ";
	$result1= mysql_query($sql1) or die(mysql_error());

	while($row = mysql_fetch_array($result1))
	{
		echo '<table align="center">';
		echo "<tr><td>Id</td><td>".$row['t_id']."</td></tr>";
		echo "<tr><td>Name</td><td>".$row['t_fname']." ".$row['t_lname']."</td></tr>";
		echo "<tr><td>Date of Birth</td><td>".$row['t_dob']."</td></tr>";
		echo "<tr><td>Gender</td><td>".$row['t_gender']."</td></tr>";
		echo "<tr><td>Address</td><td>".$row['t_address']."</td></tr>";
		echo "<tr><td>Mobile</td><td>".$row['t_mobile']."</td></tr>";
		echo "<tr><td>Email_Id</td><td>".$row['email']."</td></tr>";
		echo "<tr><td>Username</td><td>".$row['usrname']."</td></tr>";
		echo "<tr><td>Password</td><td>".$row['pswrd']."</td></tr>";
	}
	?>
	</table>
	
	
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

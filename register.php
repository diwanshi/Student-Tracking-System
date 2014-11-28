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
		$f_name=$_POST['fname'];
		$l_name=$_POST['lname'];
		$rel=$_POST['rel'];
		$d_o_b=$_POST['dob'];
		$add=$_POST['off_add'];
		$mob=$_POST['mobile'];
		$offno=$_POST['off_no'];
		$occ=$_POST['occ'];
		$desg=$_POST['desg'];
		$mail=$_POST['email'];
		$uname=$_POST['usrname'];
		$pwd=$_POST['pwd'];
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
		
	$sql="insert into parents(f_name,l_name,date_of_birth,mob_no,occupation,off_add,off_no,desg,email_id,rel_to_student,username,password) values('$f_name','$l_name','$d_o_b','$mob','$occ','$add','$offno','$desg','$mail','$rel','$uname','$pwd')";
	$result=mysql_query($sql)or die(mysql_error());
	if($result)
	{
		echo '<h3 align="center">Registration Successfull!!! </h3>';
		echo'<h3><a href="index.html">Now you can Signin to your account</a></h3>';
	}
	?>
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

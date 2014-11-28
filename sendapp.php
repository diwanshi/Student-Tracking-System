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
	$pid=$_SESSION['p_id'];
	$sql1="select s.fname,s.lname,s.s_id,a.status from students s,authorization a where s.s_id=a.s_id and a.p_id='$pid' and a.status=1";
	$result1 = mysql_query($sql1);
	
	$sql2="select * from parents where p_id='$pid'";
	$result2=mysql_query($sql2)or die(mysql_error);
	$row2=mysql_fetch_array($result2);
	$FirstName=$row2['username'];
	?>
	<form action="sendapp1.php" method="post">
	<h3 align="center">Select Student_Id <select name="sid"></h3>
	<?php
	while ($row = mysql_fetch_array($result1))    
	{
		echo "<option value='" .$row['s_id']. "'>" . $row['fname'] ." ".$row['lname']. "</option>";
		//$_SESSION['class_id']=$row['class_id'];
	}
	?>
	</select><br>
	<h3 align="center">To: <input type="text" name="to" /></h3><br>
	<h3 align="center">Subject: <input type="text" name="subject" /></h3><br>
	<h3 align="center">Date: <input type="date" name="app_date" /></h3><br>
	<h3 align="center">Body: <textarea rows="5" cols="20" name="body" ></textarea><br>
	
	<input type="submit" name="sumbit" value="Send Application"/>
	
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

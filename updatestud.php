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
	$sql2="select * from admin where admin_id='$admin_id'";
	$result2=mysql_query($sql2)or die(mysql_error);
	$row2=mysql_fetch_array($result2);
	$FirstName=$row2['uname'];
	
	$sql="select * from class";
	$result = mysql_query($sql);
	?><form action="updatestud.php" method="post">
	<?php
	echo "<h3 align=center>Select Class   <select name='class_id'></h3>" ;
	while ($row = mysql_fetch_array($result))    
	{
		echo "<option value='" . $row['class_id'] . "'>" . $row['class_name'] . "</option>";
	}
	echo "</select>";
	?> <input type="submit" name="sumbit" value="Search Students">
	</form>
	<form action="updatestud1.php" method="post">
	<?php
	
	
	$_SESSION['admin_id']=$admin_id;
	$class_id=$_POST['class_id'];
	$sql1="select * from students where class_id='$class_id'";
	$result1= mysql_query($sql1);
	
		echo "<h3> Please select your Student</h3>";
	echo "<table border=1 align=center>";
	echo "<tr><td>Select</td><td>Student_Id</td><td>Student_Name</td><td>Date Of Birth</td><td>Landline No</td></tr>";
	while ($row1 = mysql_fetch_array($result1))    
	{
		echo "<tr><td>";
		echo '<input type="radio" name="stud" value="'.$row1['s_id'].'"/></td>';
		echo "<td>" .$row1['s_id']."</td>";
		echo "<td>" .$row1['fname']." ".$row['lname']."</td>";
		echo "<td>" .$row1['dob']."</td>";
		echo "<td>" .$row1['landline_no']."</td></tr><br>";
	}
	?>
	</table>
	<input type="submit" name="sumbit" value="Update">
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

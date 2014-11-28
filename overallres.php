<?php
session_start(); 
?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">
 function madeselection1()
{
 var selct=document.getElementById('sid');
  var salt=document.getElementById('sid1'); 
 
  if(selct.value=="Select Student")
  {
    salt.innerHTML="<font color='red'>Choose Student</font>";
    //selct.focus();
   return false;
  }
  else
  { 
	return true;
  }
}
  function slctemp1()
{
var saalt=document.getElementById('sid1'); 
saalt.innerHTML="&#10004";
 }
 
 function chkform()
 {
	if(madeselection1())
	{
		return true;
	}
	else
	{
		return false;
	}
}
		
 
  </script>
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
	
	$pid=$_SESSION['p_id'];
	$_SESSION['p_id']=$pid;
	$sql="select * from parents where p_id='$pid'";
	$result=mysql_query($sql)or die(mysql_error);
	$row=mysql_fetch_array($result);
	$FirstName=$row['username'];
	
	$sql1="select s.fname,s.lname,s.s_id,a.status from students s,authorization a where s.s_id=a.s_id and a.p_id='$pid' and a.status=1";
	$result1 = mysql_query($sql1);
	?>
	<div class="form_settings">
	<form name="field" action="overallres1.php" method="post" onsubmit="return chkform()">
	<p><span style="float:left; width:150px;">Select Student_Id</span> <select name="sid" id="sid" onchange="slctemp1()" onBlur="madeselection1()">
	<option>Select Student</option>
	<?php
	while ($row = mysql_fetch_array($result1))    
	{
		echo "<option value='" .$row['s_id']. "'>" . $row['fname'] ." ".$row['lname']. "</option>";
		$_SESSION['fname']=$row['fname'];
		$_SESSION['lname']=$row['lname'];
	}
	?>
	</select><span  id=sid1 style="float:right; font-size:20;"></span></p>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="See Performance"></p>
	</form>
    </div>
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

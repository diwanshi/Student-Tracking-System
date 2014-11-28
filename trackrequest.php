<?php session_start();?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">

function madeselection()
{
 var selct=document.getElementById('class_id');
  var salt=document.getElementById('cid1'); 
 
  if(selct.value=="Please Select Student")
  {
    salt.innerHTML="<font color='red'>Select Student</font>";
    //selct.focus();
   return false;
  }
  else
  { 
	
	return true;
  }
}
  function slctemp()
{
var saalt=document.getElementById('cid1'); 
saalt.innerHTML="&#10004";
 }
 
 function chkform1()
{
	if(madeselection())
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
	
	$p_id=$_SESSION['p_id'];
	$_SESSION['p_id']=$p_id;
	$sql2="select * from parents where p_id='$p_id'";
	$result2=mysql_query($sql2)or die(mysql_error);
	$row2=mysql_fetch_array($result2);
	$FirstName=$row2['username'];
	
	$sql="select s.s_id,s.fname,s.lname,a.p_id from students s,authorization a where a.p_id='$p_id' and a.s_id=s.s_id";
	$result = mysql_query($sql);
	//$row=mysql_fetch_array($result);
	
	?>
	<div class="form_settings">
	<form name="field1" action="trackstatus.php" method="post" onsubmit="return chkform1()">
	<?php
	echo '<p><span style="float:left; width:150px;">For Which Student you want to track request?</span><select name="class_id" id="class_id" onchange="slctemp()" onBlur="madeselection()">' ;
	echo "<option>Please Select Student</option>";
	while ($row = mysql_fetch_array($result))    
	{
		echo "<option value='" . $row['s_id'] . "'>" . $row['fname'] ." ". $row['lname']. "</option>";
	}
	echo '</select><span id=cid1 style="float:right;"></span></p>';
	?> <p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="sumbit" value="Track">
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

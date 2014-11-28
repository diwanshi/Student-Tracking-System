<?php session_start(); ?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript">
  
  function slctemp()
{
var choosen=-1;
//var selc=document.getElementById('checkbox').value;
var len=document.field.checkbox.length;
var saalt=document.getElementById('checkbox1'); 
if (len>1)
{
for(i=0;i<len;i++)
{
	if (document.field.checkbox[i].checked)
	{
		choosen = document.field.checkbox[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>You must select one or more student</font>";
	return false;
}
}
else
{
if (document.field.checkbox[1].checked)
	{
		choosen = document.field.checkbox[1].value;
	}
	if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
}

function chkform()
{
	if(slctemp())
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
	
      <div class="content"><br><br><br><br><br><br>
        <?php
	$host="localhost"; // Host name
	$username="root"; // username
	$password=""; // password
	$db_name="studenttracksystem"; // Database name
		
		$adminid=$_SESSION['admin_id'];
		$_SESSION['admin_id']=$adminid;
		
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	
	$sql1="select * from admin where admin_id='$adminid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['uname'];
			
	$sql="select s.s_id,s.fname,s.lname,s.roll_no,s.class_id,p.f_name,p.l_name,a.*,s.class_id,c.class_id,c.class_name from students s,authorization a,parents p,class c where s.s_id=a.s_id and p.p_id=a.p_id and s.class_id=c.class_id and a.status='0' ";
	$result = mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count>=1)
	{
	if($result)
	{
	?>	
		<div class="form_settings">
		<form name="field" action="claimstatus.php" method="post" onsubmit="return chkform()">
		<table border="5" style="margin-left:auto; margin-right:auto;">
		<caption>Please Select Student(s)<span id=checkbox1 style="float:right"></span></caption>
		<tr><td></td><td>Student_Name</td><td>RollNo</td><td>Class</td><td>Parent's Name</td></tr>
		<?php
	while ($row = mysql_fetch_array($result)) 
	{
		echo "<tr><td>";
		echo '<input type="checkbox" name="checkbox[]" value="'.$row['auth_id'].'" id="checkbox" onclick="slctemp()"></td>';
		echo "<td>" .$row['fname']." ".$row['lname']."</td>";
		echo "<td>" .$row['roll_no']."</td>";
		echo "<td>" .$row['class_name']."</td>";
		echo "<td>" .$row['f_name']." ".$row['l_name']."</td></tr>";
		$_SESSION['s_id']=$row['s_id'];
	}
	?>
	</table>
	<p style="padding-top:15px"><input class="submit" type="submit" name="approve" value="Approve" id="approve"></p>
	<p style="padding-top:15px"><input class="submit" type="submit" name="reject" value="Reject" id="reject"></p>
	</form>
	</div>
	<?php
	}
	else
	{
		echo "<h3 align=center>Something wrong must have happened</h3>";
	}
	}
	else
	{
		echo '<h3 align="center">There are no requests to Approve or Reject!!!</h3> ';
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

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
  function isAlphabet()
{
  var alphaExp = /^[a-zA-Z]+$/;
  var fnamee=document.field.cname.value;
  var clid=document.field.cid.value;
  var nalt1=document.getElementById('cname1');
  if(fnamee!="")
   {
      if(!fnamee.match(alphaExp))
      {
       nalt1.innerHTML="<font color='red'> Invalid Characters </font>";
       //document.field.fname.focus();
        document.field.cname.value="";
         return false; 	
       }
	   else if(clid==1 && fnamee!="I")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==2 && fnamee!="II")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==3 && fnamee!="III")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==4 && fnamee!="IV")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==5 && fnamee!="V")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==6 && fnamee!="VI")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==7 && fnamee!="VII")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==8 && fnamee!="VIII")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==9 && fnamee!="IX")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==10 && fnamee!="X")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==11 && fnamee!="XI")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		else if(clid==12 && fnamee!="XII")
	   {
			nalt1.innerHTML="<font color='red'>Roman letters only for selected class id </font>";
			document.field.cname.value="";
		}
		
	   else
	   {
  		  nalt1.innerHTML="&#10004";
		    return true; 
        }
   }
  else  if(fnamee.length==0)
  {
   nalt1.innerHTML="<font color='red'> Classs Name is Must</font>";
    //document.getElementById('fname').focus();
   return false;
  }

}

function isNumeric()
{
  var elem=document.field.cid.value;
  var nalt=document.getElementById('cid1');
 if(elem.length!=0)
 {
    var numericExpression = /^[0-9]+$/;
	 if(elem.match(numericExpression))
    {
		if(elem.length>2)
		{
		nalt.innerHTML="<font color='red'> Invalid Class Id</font>";
		//document.field.cid.focus();
		document.field.cid.value="";
		return false;
		}
		else
		{
         nalt.innerHTML="&#10004";
         return true;
		}
    }
	else
	{
		  nalt.innerHTML="<font color='red'> Numeric Values Only</font>";
		  //document.field.mobile.focus();
	 	  document.field.cid.value="";
       return false;
	}
  }
  else if(elem.length==0)
  {
		nalt.innerHTML="<font color='red'>Class id is must</font>";
		//document.field.mobile.focus();
		//document.field.mobile.value="";
		return false;
  }
  }
 
  function slctemp()
{
var choosen=-1;
var selc=document.getElementById('teacher').value;
var len=document.field.teacher.length;
var saalt=document.getElementById('teacher1'); 
for(i=0;i<len;i++)
{
	if (document.field.teacher[i].checked)
	{
		choosen = document.field.teacher[i].value;
	}
}
if(choosen!=-1)
{
saalt.innerHTML="&#10004";
return true;
}
else
{
	saalt.innerHTML="<font color='red'>Select Teacher</font>";
	return false;
}
}
 function chkform()
{
  if(isNumeric())   
  {   
	if(isAlphabet())
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
	else
		{
			return false;
		}
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
	$sql="select * from class_teachers where t_status=1";
	$result=mysql_query($sql);
	$admin_id=$_SESSION['admin_id'];
	//$_SESSION['admin_id']=$admin_id;
	
	$sql1="select * from admin where admin_id='$admin_id'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['uname'];
	?>
	<div class="form_settings">
	<h3 align="center">Enter Class Details</h3>
	<form name="field" action="addclass1.php" method="post" onsubmit="return chkform()">
	<p><span style="float:left; width:150px;">Class Id:</span><input type="text" name="cid" id="cid" onBlur="isNumeric()"><span id=cid1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Class Name:</span><input type="text" name="cname" id="cname" onBlur="isAlphabet()"><span id=cname1 style="float:right;"></span></p>
	<p><span style="float:left; width:150px;">Select Teacher:</span>
	<table align="center" border="1">
	<tr><td>Select</td><td>Id</td><td>Name</td><td>Gender</td><td>Address</td></tr>
	<?php
	while ($row= mysql_fetch_array($result))    
	{
		echo "<tr>";
		echo '<td><input type="radio" name="teacher" id="teacher" value="'.$row['t_id'].'" onblur="slctemp()"></td>';
		echo "<td>".$row['t_id']."</td>";
		echo "<td>".$row['t_fname']." ".$row['t_lname']."</td>";
		echo "<td>".$row['t_gender']."</td>";
		echo "<td>".$row['t_address']."</td></tr>";
		
	}
	?>
	<span id=teacher1 style="float:right;"></span>
	</table></p>
	<p style="padding-top:15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Assign Teacher" ></p>
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

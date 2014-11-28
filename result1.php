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
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  
      function drawChart() {
		
      var eng=Number(document.getElementById('eng').value);
	  var hin=Number(document.getElementById('hin').value);
	  var math=Number(document.getElementById('math').value);
	  var sci=Number(document.getElementById('sci').value);
	  var sst=Number(document.getElementById('sst').value);
	  var sans=Number(document.getElementById('sans').value);
	var data = new google.visualization.DataTable();
    data.addColumn('string', 'Subject');
    data.addColumn('number', 'Marks');
    data.addRows([
          ['English',     eng],
          ['Hindi',      hin],
          ['Maths',  math],
          ['Science', sci],
          ['Social Studies',    sst],
		  ['Sanskrit',  sans]
    ]);

		

        var options = {
          title: 'Student Result Sheet',
          hAxis: {title: 'Subject', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
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
	// Replace database connect functions depending on database you are using.
	$conn=mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name",$conn);
	$pid=$_SESSION['p_id'];
	$sid=$_POST['sid'];
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$test_id=$_POST['result'];
	
	$sql1="select * from parents where p_id='$pid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['username'];
	
	$sql="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id='$test_id' and r.test_id=t.test_id";
	$result= mysql_query($sql);
	$count= mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	if ($test_id==4 || $test_id==5) 
	{
		echo "<h3>";
		echo $row['test_name']; 
		echo "&nbsp;Result</h3>";
		$eng=$row['english'];
		$hin=$row['hindi'];
		$math=$row['maths'];
		$sci=$row['science'];
		$sst=$row['social_st'];
		$sans=$row['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng' value='" .$eng. "' >";
	echo "<input type='hidden' id='hin' value='" .$hin. "' >";
	echo "<input type='hidden' id='math' value='" .$math. "' >";
	echo "<input type='hidden' id='sci' value='" .$sci. "' >";
	echo "<input type='hidden' id='sst' value='" .$sst. "' >";
	echo "<input type='hidden' id='sans' value='" .$sans. "' >";
	
	echo "</form>";
	$total=$row['english']+$row['hindi']+$row['maths']+$row['science']+$row['social_st']+$row['sanskrit'];
	//echo $total;
	?>
	</h3>
	<br>
	<h3>Percentage:
	<?php
	$percentage=($total/600)*100;
	echo $percentage;
	echo "%";
	?>
	</h3>
	<br>
	<h3>Remarks:
	<?php echo $row['remark']; 
	echo "</h3>";
	}//if end
	
	else
	{
	echo "<h3>";
		echo $row['test_name']; 
		echo "&nbsp;Result</h3>";
		$eng=$row['english'];
		$hin=$row['hindi'];
		$math=$row['maths'];
		$sci=$row['science'];
		$sst=$row['social_st'];
		$sans=$row['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng' value='" .$eng. "' >";
	echo "<input type='hidden' id='hin' value='" .$hin. "' >";
	echo "<input type='hidden' id='math' value='" .$math. "' >";
	echo "<input type='hidden' id='sci' value='" .$sci. "' >";
	echo "<input type='hidden' id='sst' value='" .$sst. "' >";
	echo "<input type='hidden' id='sans' value='" .$sans. "' >";
	
	echo "</form>";
	$total=$row['english']+$row['hindi']+$row['maths']+$row['science']+$row['social_st']+$row['sanskrit'];
	//echo $total;
	?>
	</h3>
	<br>
	<h3>Percentage:
	<?php
	$percentage=($total/180)*100;
	echo $percentage."%";
	?>
	</h3>
	<br>
	<h3>Remarks:
	<?php echo $row['remark']; 
	}
	?>
	
	</h3>
	<div id="chart_div" style="width: 900px; height: 500px;"></div>
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

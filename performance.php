<?php session_start(); ?>
<html>
<head>
  <title>Student Tracking System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects 
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>-->
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  
      function drawChart() {
		
      var disc1=Number(document.getElementById('disc').value);
	  var class_alert1=Number(document.getElementById('class_alert').value);
	  var eca1=Number(document.getElementById('eca').value);
	  var sports1=Number(document.getElementById('sports').value);
	  var att1=Number(document.getElementById('att').value);
		
	var data = new google.visualization.DataTable();
    data.addColumn('string', 'Criteria');
    data.addColumn('number', 'Performance');
    data.addRows([
          ['Discipline',  disc1],
          ['Class Alertness',  class_alert1],
          ['Extra Curricular Activities',  eca1],
          ['Sports',  sports1],
		  ['Attendance',  att1]
    ]);

		

        var options = {
          title: 'Student Performance',
          hAxis: {title: 'Criteria', titleTextStyle: {color: 'red'}}
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
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$month=$_POST['month'];
	$sid=$_POST['sid'];
	$sql1="select * from parents where p_id='$pid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['username'];
	
	$sql="select * from performance where s_id='$sid' and month='$month'";
	$result= mysql_query($sql);
	$count= mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	echo '<h3 align="center">Monthly Performance</h3>';
		echo "<h3>Student Id:".$sid."</h3><br>";
		echo "<h3>Student Name:".$fname." ".$lname."</h3><br>";
		$disc=$row['discipline'];
		$class_alert=$row['class_alert'];
		$eca=$row['eca'];
		$sports=$row['sports'];
		$att=$row['attendance'];
		echo "<h3>Remarks:" .$row['comments']."</h3><br>";

	echo "<form>";
	echo "<input type='hidden' id='disc' value='" .$disc. "' >";
	echo "<input type='hidden' id='class_alert' value='" .$class_alert. "' >";
	echo "<input type='hidden' id='eca' value='" .$eca. "' >";
	echo "<input type='hidden' id='sports' value='" .$sports. "' >";
	echo "<input type='hidden' id='att' value='" .$att. "' >";
	echo "</form>";
	?>
	<div id="chart_div" style="width: 900px; height: 500px;"></div>
	
    </div>
      <div id="sidebar_container">
        <div class="sidebar">
	<h4>Hello!!!!!!</h4>
	<?php
	echo "<h3>".$FirstName."</h3>";
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

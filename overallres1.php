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
	  
	    //For UnitTest1
		var eng=Number(document.getElementById('eng').value);
		var hin=Number(document.getElementById('hin').value);
		var math=Number(document.getElementById('math').value);
		var sci=Number(document.getElementById('sci').value);
		var sst=Number(document.getElementById('sst').value);
		var sans=Number(document.getElementById('sans').value);
		
		//For UnitTest2
		var eng2=Number(document.getElementById('eng2').value);
		var hin2=Number(document.getElementById('hin2').value);
		var math2=Number(document.getElementById('math2').value);
		var sci2=Number(document.getElementById('sci2').value);
		var sst2=Number(document.getElementById('sst2').value);
		var sans2=Number(document.getElementById('sans2').value);
		
		//For UnitTest3
		var eng3=Number(document.getElementById('eng3').value);
		var hin3=Number(document.getElementById('hin3').value);
		var math3=Number(document.getElementById('math3').value);
		var sci3=Number(document.getElementById('sci3').value);
		var sst3=Number(document.getElementById('sst3').value);
		var sans3=Number(document.getElementById('sans3').value);
		
		//For Half Yearly
		var eng4=Number(document.getElementById('eng4').value);
		var hin4=Number(document.getElementById('hin4').value);
		var math4=Number(document.getElementById('math4').value);
		var sci4=Number(document.getElementById('sci4').value);
		var sst4=Number(document.getElementById('sst4').value);
		var sans4=Number(document.getElementById('sans4').value);
		
		//For Final
		var eng5=Number(document.getElementById('eng5').value);
		var hin5=Number(document.getElementById('hin5').value);
		var math5=Number(document.getElementById('math5').value);
		var sci5=Number(document.getElementById('sci5').value);
		var sst5=Number(document.getElementById('sst5').value);
		var sans5=Number(document.getElementById('sans5').value);
		
		var data = google.visualization.arrayToDataTable([
        ['Result', 'English', 'Hindi', 'Maths', 'Science',
         'Social Studies','Sanskrit', { role: 'annotation' } ],
        ['Unit Test 1', eng, hin, math, sci, sst, sans,''],
		['Unit Test 2', eng2, hin2, math2, sci2, sst2, sans2,''],
		['Unit Test 3', eng3, hin3, math3, sci3, sst3, sans3,''],
		['Half-Yearly', eng4, hin4, math4, sci4, sst4, sans4,''],
		['Final', eng5, hin5, math5, sci5, sst5, sans5,''],
		
		
		
      ]);

      var options = {
        width: 1000,
        height: 600,
        legend: { position: 'top', maxLines: 3 },
	bar: { groupWidth: '75%' },
        isStacked: true,
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
	
	$sql1="select * from parents where p_id='$pid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['username'];
	
	// For UnitTest1
	$sql="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id=1 and r.test_id=t.test_id";
	$result= mysql_query($sql);
	$count= mysql_num_rows($result);
	$row=mysql_fetch_array($result);

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
	
	// For UnitTest2
	$sql2="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id=2 and r.test_id=t.test_id";
	$result2= mysql_query($sql2);
	$count2= mysql_num_rows($result2);
	$row2=mysql_fetch_array($result2);

		$eng2=$row2['english'];
		$hin2=$row2['hindi'];
		$math2=$row2['maths'];
		$sci2=$row2['science'];
		$sst2=$row2['social_st'];
		$sans2=$row2['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng2' value='" .$eng2. "' >";
	echo "<input type='hidden' id='hin2' value='" .$hin2. "' >";
	echo "<input type='hidden' id='math2' value='" .$math2. "' >";
	echo "<input type='hidden' id='sci2' value='" .$sci2. "' >";
	echo "<input type='hidden' id='sst2' value='" .$sst2. "' >";
	echo "<input type='hidden' id='sans2' value='" .$sans2. "' >";
	echo "</form>";
	
	// For UnitTest3
	$sql3="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id=3 and r.test_id=t.test_id";
	$result3= mysql_query($sql3);
	$count3= mysql_num_rows($result3);
	$row3=mysql_fetch_array($result3);

		$eng3=$row3['english'];
		$hin3=$row3['hindi'];
		$math3=$row3['maths'];
		$sci3=$row3['science'];
		$sst3=$row3['social_st'];
		$sans3=$row3['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng3' value='" .$eng3. "' >";
	echo "<input type='hidden' id='hin3' value='" .$hin3. "' >";
	echo "<input type='hidden' id='math3' value='" .$math3. "' >";
	echo "<input type='hidden' id='sci3' value='" .$sci3. "' >";
	echo "<input type='hidden' id='sst3' value='" .$sst3. "' >";
	echo "<input type='hidden' id='sans3' value='" .$sans3. "' >";
	echo "</form>";
	
	// For Half Yearly
	$sql4="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id=4 and r.test_id=t.test_id";
	$result4= mysql_query($sql4);
	$count4= mysql_num_rows($result4);
	$row4=mysql_fetch_array($result4);

		$eng4=$row4['english'];
		$hin4=$row4['hindi'];
		$math4=$row4['maths'];
		$sci4=$row4['science'];
		$sst4=$row4['social_st'];
		$sans4=$row4['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng4' value='" .$eng4. "' >";
	echo "<input type='hidden' id='hin4' value='" .$hin4. "' >";
	echo "<input type='hidden' id='math4' value='" .$math4. "' >";
	echo "<input type='hidden' id='sci4' value='" .$sci4. "' >";
	echo "<input type='hidden' id='sst4' value='" .$sst4. "' >";
	echo "<input type='hidden' id='sans4' value='" .$sans4. "' >";
	echo "</form>";
	
	// For Final
	$sql5="select r.*,t.* from result r,test t where r.s_id='$sid' and r.test_id=5 and r.test_id=t.test_id";
	$result5= mysql_query($sql5);
	$count5= mysql_num_rows($result5);
	$row5=mysql_fetch_array($result5);

		$eng5=$row5['english'];
		$hin5=$row5['hindi'];
		$math5=$row5['maths'];
		$sci5=$row5['science'];
		$sst5=$row5['social_st'];
		$sans5=$row5['sanskrit'];
		echo "<form>";
	echo "<input type='hidden' id='eng5' value='" .$eng5. "' >";
	echo "<input type='hidden' id='hin5' value='" .$hin5. "' >";
	echo "<input type='hidden' id='math5' value='" .$math5. "' >";
	echo "<input type='hidden' id='sci5' value='" .$sci5. "' >";
	echo "<input type='hidden' id='sst5' value='" .$sst5. "' >";
	echo "<input type='hidden' id='sans5' value='" .$sans5. "' >";
	echo "</form>";
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

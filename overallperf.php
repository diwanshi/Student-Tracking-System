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
	  //For January
	  var disc1=Number(document.getElementById('disc').value);
	  var class_alert1=Number(document.getElementById('class_alert').value);
	  var eca1=Number(document.getElementById('eca').value);
	  var sports1=Number(document.getElementById('sports').value);
	  var att1=Number(document.getElementById('att').value);
	  //For February
	  var disc2=Number(document.getElementById('disc2').value);
	  var class_alert2=Number(document.getElementById('class_alert2').value);
	  var eca2=Number(document.getElementById('eca2').value);
	  var sports2=Number(document.getElementById('sports2').value);
	  var att2=Number(document.getElementById('att2').value);
	  
	  //For March
	  var disc3=Number(document.getElementById('disc3').value);
	  var class_alert3=Number(document.getElementById('class_alert3').value);
	  var eca3=Number(document.getElementById('eca3').value);
	  var sports3=Number(document.getElementById('sports3').value);
	  var att3=Number(document.getElementById('att3').value);
	  
	  //For April
	  var disc4=Number(document.getElementById('disc4').value);
	  var class_alert4=Number(document.getElementById('class_alert4').value);
	  var eca4=Number(document.getElementById('eca4').value);
	  var sports4=Number(document.getElementById('sports4').value);
	  var att4=Number(document.getElementById('att4').value);
	  
	  //For May
	  var disc5=Number(document.getElementById('disc5').value);
	  var class_alert5=Number(document.getElementById('class_alert5').value);
	  var eca5=Number(document.getElementById('eca5').value);
	  var sports5=Number(document.getElementById('sports5').value);
	  var att5=Number(document.getElementById('att5').value);
	  
	  //For June
	  var disc6=Number(document.getElementById('disc6').value);
	  var class_alert6=Number(document.getElementById('class_alert6').value);
	  var eca6=Number(document.getElementById('eca6').value);
	  var sports6=Number(document.getElementById('sports6').value);
	  var att6=Number(document.getElementById('att6').value);
	  
	  //For July
	  var disc7=Number(document.getElementById('disc7').value);
	  var class_alert7=Number(document.getElementById('class_alert7').value);
	  var eca7=Number(document.getElementById('eca7').value);
	  var sports7=Number(document.getElementById('sports7').value);
	  var att7=Number(document.getElementById('att7').value);
	  
	  //For August
	  var disc8=Number(document.getElementById('disc8').value);
	  var class_alert8=Number(document.getElementById('class_alert8').value);
	  var eca8=Number(document.getElementById('eca8').value);
	  var sports8=Number(document.getElementById('sports8').value);
	  var att8=Number(document.getElementById('att8').value);
	  
	  //For September
	  var disc9=Number(document.getElementById('disc9').value);
	  var class_alert9=Number(document.getElementById('class_alert9').value);
	  var eca9=Number(document.getElementById('eca9').value);
	  var sports9=Number(document.getElementById('sports9').value);
	  var att9=Number(document.getElementById('att9').value);
	  
	  //For October
	  var disc10=Number(document.getElementById('disc10').value);
	  var class_alert10=Number(document.getElementById('class_alert10').value);
	  var eca10=Number(document.getElementById('eca10').value);
	  var sports10=Number(document.getElementById('sports10').value);
	  var att10=Number(document.getElementById('att10').value);
	  
	  //For November
	  var disc11=Number(document.getElementById('disc11').value);
	  var class_alert11=Number(document.getElementById('class_alert11').value);
	  var eca11=Number(document.getElementById('eca11').value);
	  var sports11=Number(document.getElementById('sports11').value);
	  var att11=Number(document.getElementById('att11').value);
	  
	  //For December
	  var disc12=Number(document.getElementById('disc12').value);
	  var class_alert12=Number(document.getElementById('class_alert12').value);
	  var eca12=Number(document.getElementById('eca12').value);
	  var sports12=Number(document.getElementById('sports12').value);
	  var att12=Number(document.getElementById('att12').value);
	  
		var data = google.visualization.arrayToDataTable([
        ['Month', 'Discipline', 'Class Alertness', 'ECA', 'Sports',
         'Attendance', { role: 'annotation' } ],
        ['January', disc1, class_alert1, eca1, sports1, att1, ''],
		['February', disc2, class_alert2, eca2, sports2, att2, ''],
		['March', disc3, class_alert3, eca3, sports3, att3, ''],
		['April', disc4, class_alert4, eca4, sports4, att4, ''],
		['May', disc5, class_alert5, eca5, sports5, att5, ''],
		['June', disc6, class_alert6, eca6, sports6, att6, ''],
		['July', disc7, class_alert7, eca7, sports7, att7, ''],
		['August', disc8, class_alert8, eca8, sports8, att8, ''],
		['September', disc9, class_alert9, eca9, sports9, att9, ''],
		['October', disc10, class_alert10, eca10, sports10, att10, ''],
		['November', disc11, class_alert11, eca11, sports11, att11, ''],
		['December', disc12, class_alert12, eca12, sports12, att12, ''],
		
		
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
	$sid=$_POST['sid'];
	$sql1="select * from parents where p_id='$pid'";
	$result1=mysql_query($sql1)or die(mysql_error);
	$row1=mysql_fetch_array($result1);
	$FirstName=$row1['username'];
	//For January
	$sql="select * from performance where s_id='$sid' and month='January'";
	$result= mysql_query($sql);
	$count= mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	echo '<h3 align="center">Full Year Performance</h3>';
		echo "<h3>Student Id:".$sid."</h3><br>";
		echo "<h3>Student Name:".$fname." ".$lname."</h3><br>";
		$disc=$row['discipline'];
		$class_alert=$row['class_alert'];
		$eca=$row['eca'];
		$sports=$row['sports'];
		$att=$row['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc' value='" .$disc. "' >";
	echo "<input type='hidden' id='class_alert' value='" .$class_alert. "' >";
	echo "<input type='hidden' id='eca' value='" .$eca. "' >";
	echo "<input type='hidden' id='sports' value='" .$sports. "' >";
	echo "<input type='hidden' id='att' value='" .$att. "' >";
	echo "</form>";
	
	//For February
	$sql2="select * from performance where s_id='$sid' and month='February'";
	$result2= mysql_query($sql2);
	$count2= mysql_num_rows($result2);
	$row2=mysql_fetch_array($result2);
		$disc2=$row2['discipline'];
		$class_alert2=$row2['class_alert'];
		$eca2=$row2['eca'];
		$sports2=$row2['sports'];
		$att2=$row2['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc2' value='" .$disc2. "' >";
	echo "<input type='hidden' id='class_alert2' value='" .$class_alert2. "' >";
	echo "<input type='hidden' id='eca2' value='" .$eca2. "' >";
	echo "<input type='hidden' id='sports2' value='" .$sports2. "' >";
	echo "<input type='hidden' id='att2' value='" .$att2. "' >";
	echo "</form>";
	
	//For March
	$sql3="select * from performance where s_id='$sid' and month='March'";
	$result3= mysql_query($sql3);
	$count3= mysql_num_rows($result3);
	$row3=mysql_fetch_array($result3);
		$disc3=$row3['discipline'];
		$class_alert3=$row3['class_alert'];
		$eca3=$row3['eca'];
		$sports3=$row3['sports'];
		$att3=$row3['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc3' value='" .$disc3. "' >";
	echo "<input type='hidden' id='class_alert3' value='" .$class_alert3. "' >";
	echo "<input type='hidden' id='eca3' value='" .$eca3. "' >";
	echo "<input type='hidden' id='sports3' value='" .$sports3. "' >";
	echo "<input type='hidden' id='att3' value='" .$att3. "' >";
	echo "</form>";
	
	//For April
	$sql4="select * from performance where s_id='$sid' and month='April'";
	$result4= mysql_query($sql4);
	$count4= mysql_num_rows($result4);
	$row4=mysql_fetch_array($result4);
		$disc4=$row4['discipline'];
		$class_alert4=$row4['class_alert'];
		$eca4=$row4['eca'];
		$sports4=$row4['sports'];
		$att4=$row4['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc4' value='" .$disc4. "' >";
	echo "<input type='hidden' id='class_alert4' value='" .$class_alert4. "' >";
	echo "<input type='hidden' id='eca4' value='" .$eca4. "' >";
	echo "<input type='hidden' id='sports4' value='" .$sports4. "' >";
	echo "<input type='hidden' id='att4' value='" .$att4. "' >";
	echo "</form>";
	
	//For May
	$sql5="select * from performance where s_id='$sid' and month='May'";
	$result5= mysql_query($sql5);
	$count5= mysql_num_rows($result5);
	$row5=mysql_fetch_array($result5);
		$disc5=$row5['discipline'];
		$class_alert5=$row5['class_alert'];
		$eca5=$row5['eca'];
		$sports5=$row5['sports'];
		$att5=$row5['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc5' value='" .$disc5. "' >";
	echo "<input type='hidden' id='class_alert5' value='" .$class_alert5. "' >";
	echo "<input type='hidden' id='eca5' value='" .$eca5. "' >";
	echo "<input type='hidden' id='sports5' value='" .$sports5. "' >";
	echo "<input type='hidden' id='att5' value='" .$att5. "' >";
	echo "</form>";
	
	//For June
	$sql6="select * from performance where s_id='$sid' and month='June'";
	$result6= mysql_query($sql6);
	$count6= mysql_num_rows($result6);
	$row6=mysql_fetch_array($result6);
		$disc6=$row6['discipline'];
		$class_alert6=$row6['class_alert'];
		$eca6=$row6['eca'];
		$sports6=$row6['sports'];
		$att6=$row6['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc6' value='" .$disc6. "' >";
	echo "<input type='hidden' id='class_alert6' value='" .$class_alert6. "' >";
	echo "<input type='hidden' id='eca6' value='" .$eca6. "' >";
	echo "<input type='hidden' id='sports6' value='" .$sports6. "' >";
	echo "<input type='hidden' id='att6' value='" .$att6. "' >";
	echo "</form>";
	
	//For July
	$sql7="select * from performance where s_id='$sid' and month='July'";
	$result7= mysql_query($sql7);
	$count7= mysql_num_rows($result7);
	$row7=mysql_fetch_array($result7);
		$disc7=$row7['discipline'];
		$class_alert7=$row7['class_alert'];
		$eca7=$row7['eca'];
		$sports7=$row7['sports'];
		$att7=$row7['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc7' value='" .$disc7. "' >";
	echo "<input type='hidden' id='class_alert7' value='" .$class_alert7. "' >";
	echo "<input type='hidden' id='eca7' value='" .$eca7. "' >";
	echo "<input type='hidden' id='sports7' value='" .$sports7. "' >";
	echo "<input type='hidden' id='att7' value='" .$att7. "' >";
	echo "</form>";
	
	//For August
	$sql8="select * from performance where s_id='$sid' and month='August'";
	$result8= mysql_query($sql8);
	$count8= mysql_num_rows($result8);
	$row8=mysql_fetch_array($result8);
		$disc8=$row8['discipline'];
		$class_alert8=$row8['class_alert'];
		$eca8=$row8['eca'];
		$sports8=$row8['sports'];
		$att8=$row8['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc8' value='" .$disc8. "' >";
	echo "<input type='hidden' id='class_alert8' value='" .$class_alert8. "' >";
	echo "<input type='hidden' id='eca8' value='" .$eca8. "' >";
	echo "<input type='hidden' id='sports8' value='" .$sports8. "' >";
	echo "<input type='hidden' id='att8' value='" .$att8. "' >";
	echo "</form>";
	
	//For September
	$sql9="select * from performance where s_id='$sid' and month='September'";
	$result9= mysql_query($sql9);
	$count9= mysql_num_rows($result9);
	$row9=mysql_fetch_array($result9);
		$disc9=$row9['discipline'];
		$class_alert9=$row9['class_alert'];
		$eca9=$row9['eca'];
		$sports9=$row9['sports'];
		$att9=$row9['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc9' value='" .$disc9. "' >";
	echo "<input type='hidden' id='class_alert9' value='" .$class_alert9. "' >";
	echo "<input type='hidden' id='eca9' value='" .$eca9. "' >";
	echo "<input type='hidden' id='sports9' value='" .$sports9. "' >";
	echo "<input type='hidden' id='att9' value='" .$att9. "' >";
	echo "</form>";
	
	//For October
	$sql10="select * from performance where s_id='$sid' and month='October'";
	$result10= mysql_query($sql10);
	$count10= mysql_num_rows($result10);
	$row10=mysql_fetch_array($result10);
		$disc10=$row10['discipline'];
		$class_alert10=$row10['class_alert'];
		$eca10=$row10['eca'];
		$sports10=$row10['sports'];
		$att10=$row10['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc10' value='" .$disc10. "' >";
	echo "<input type='hidden' id='class_alert10' value='" .$class_alert10. "' >";
	echo "<input type='hidden' id='eca10' value='" .$eca10. "' >";
	echo "<input type='hidden' id='sports10' value='" .$sports10. "' >";
	echo "<input type='hidden' id='att10' value='" .$att10. "' >";
	echo "</form>";
	
	//For November
	$sql11="select * from performance where s_id='$sid' and month='November'";
	$result11= mysql_query($sql11);
	$count11= mysql_num_rows($result11);
	$row11=mysql_fetch_array($result11);
		$disc11=$row11['discipline'];
		$class_alert11=$row11['class_alert'];
		$eca11=$row11['eca'];
		$sports11=$row11['sports'];
		$att11=$row11['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc11' value='" .$disc11. "' >";
	echo "<input type='hidden' id='class_alert11' value='" .$class_alert11. "' >";
	echo "<input type='hidden' id='eca11' value='" .$eca11. "' >";
	echo "<input type='hidden' id='sports11' value='" .$sports11. "' >";
	echo "<input type='hidden' id='att11' value='" .$att11. "' >";
	echo "</form>";
	
	
	//For December
	$sql12="select * from performance where s_id='$sid' and month='December'";
	$result12= mysql_query($sql12);
	$count12= mysql_num_rows($result12);
	$row12=mysql_fetch_array($result12);
		$disc12=$row12['discipline'];
		$class_alert12=$row12['class_alert'];
		$eca12=$row12['eca'];
		$sports12=$row12['sports'];
		$att12=$row12['attendance'];
		echo "<form>";
	echo "<input type='hidden' id='disc12' value='" .$disc12. "' >";
	echo "<input type='hidden' id='class_alert12' value='" .$class_alert12. "' >";
	echo "<input type='hidden' id='eca12' value='" .$eca12. "' >";
	echo "<input type='hidden' id='sports12' value='" .$sports12. "' >";
	echo "<input type='hidden' id='att12' value='" .$att12. "' >";
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

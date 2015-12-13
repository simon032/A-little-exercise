<?php session_start(); 
?>
<html>
<head>
<?php 
extract($_POST);
extract($_GET);
$con = new mysqli("localhost", "root", "", "applicant");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
	$result = mysqli_query($con,"SELECT * FROM applicants");
?>
<link href="img/Style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1></h1>
<table class="main"  border="0">
  <tbody>
    <tr>
      <td width="1693" rowspan="9"><img src="img/expr3ss-logo.jpg" width="246" height="192" alt=""/></td>
      <td width="150" align="center"></td>
      <td width="47" rowspan="9">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"></p></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div class="defaultButton" onclick="location.href='Index.php';">Home</div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div class="defaultButton" onclick="location.href='ViewAll.php';">View all applicants</div></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><img src="img/Capture.JPG" width="100%"  alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table class="mainview" border="0" align="center"   >  
<?php
if(mysqli_num_rows($result)==0){
	print "<tr><td class=\"lable\" colspan=\"8\" align=\"center\" > There are no Applicatants in Database </td></tr>"; 
}else{
	print "<tr><th >First Name</th><th >Last Name</th><th >Email</th><th >Country</th><th >Street 1</th><th >Street 2</th><th >Postcode</th><th >Suburb</th></tr>"; 
	while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
		print "<tr>";
		print "<td class=\"lable\">".$row[1]."</td>";
		print "<td class=\"lable\">".$row[2]."</td>";
		print "<td class=\"lable\">".$row[3]."</td>";
		print "<td class=\"lable\">".$row[4]."</td>";
		print "<td class=\"lable\">".$row[5]."</td>";
		print "<td class=\"lable\">".$row[6]."</td>";
		print "<td class=\"lable\">".$row[7]."</td>";
		print "<td class=\"lable\">".$row[8]."</td>";
		print "</tr>";
  	}
}
?>
</table>
</form>
</body>
</html>
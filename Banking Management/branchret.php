<html>
<body>
<?php

if(isset($_POST['retrieve']))
{
$conn=mysqli_connect("localhost","root","",'banking management');
if(!$conn)
{
	die('could not connect:');
}
$Name=$_POST['Name'];
$sql="select  * from Branch where Name='$Name'";
#dbh=mysqli_select_db('banking management');
$result=$conn->query($sql);
if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>Name</th><th>City</th><th>Code</th></tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>
	          <td>{$row['Name']}</td>
			  <td>{$row['City']}</td>
			  <td>{$row['Code']}</td>
              </tr>\n";

	}
	echo "</table>";
	mysqli_close($conn);
}

else{
	
	?>


	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">Branch Name</td>
   <td><input name="Name" type="text" id="Name"</td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
 <?php 
}
   	
?>  
<h4><font color="cyan"><a href="index1.html">Click here for home page </a></font></h4>
</body>
</html>

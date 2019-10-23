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
$Acc_no=$_POST['Acc_no'];
$sql="select  * from Account where Acc_no='$Acc_no'";
#dbh=mysqli_select_db('banking management');
$result=$conn->query($sql);
if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>Acc_no</th><th>Name</th><th>Acc_bal</th></tr>";



	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>
	          <td>{$row['Acc_no']}</td>
			  <td>{$row['Name']}</td>
			  <td>{$row['Acc_bal']}</td>
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
   <td width="100">Acc_no</td>
   <td><input name="Acc_no" type="text" id="Acc_no"</td>
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
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4> 
</body>
</html>
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
$Loan_no=$_POST['Loan_no'];
$sql="select  * from Loan where Loan_no='$Loan_no'";
#dbh=mysqli_select_db('banking management');
$result=$conn->query($sql);
if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>Loan_no</th><th>Branch Name</th><th>Loan_amt</th><th>purpose</th></tr>";



	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>
	          <td>{$row['Loan_no']}</td>
			  <td>{$row['Name']}</td>
			  <td>{$row['Loan_amt']}</td>
			<td>{$row['Purpose']}</td>
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
   <td width="100">Loan_no</td>
   <td><input name="Loan_no" type="text" id="Loan_no"</td>
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
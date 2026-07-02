<?php
$con=mysqli_connect("localhost","root","","lms");
if ($con->connect_error)  {
  die("database connection failed:".$conn->connect_error);
 }
 $in=$_POST['Indexno'];
 $sql="SELECT * FROM result WHERE Indexno='$in'";
 $re=mysqli_query($con,$sql);
 if(!$re){
    die("error in executing the SQL".$con->error);
	}
echo "IndexNo", $in;
$row=mysqli_fetch_array($re);

echo "<table border='1'> <tr><th>Subjects</th><th>Grade</th></tr>";
echo"<tr>";
echo"<td>"."BioTech"."</td>"."<td>".$row ['BioTech']."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>"."SFT"."</td>"."<td>".$row ['SFT']."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>"."ICT"."</td>"."<td>".$row ['ICT']."</td>";
echo"</tr>"; 
echo"</table>";
mysqli_close($con);
?>
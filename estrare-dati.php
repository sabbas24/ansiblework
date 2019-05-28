<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Id</th> 
  <th>Nameame</th> 
  <th>Surname</th>
  <th>Birthday</th>
 </tr>
<?php
/* dichiariamo alcune importanti variabili per collegarci al database */
$DBhost = "localhost";
$DBuser = "root";
$DBpass = "Irideos24";
$DBName = "dbDati";

/* Connettiamoci al database */
$connect = new mysqli($DBhost,$DBuser,$DBpass,$DBName) or die("Impossibile collegarsi al server");
$query = "SELECT * FROM dati";
$result = $connect->query($query);

if ($result->num_rows > 0) {
    // output data of each row
		echo "<table>";
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["surname"]. "</td><td>" . $row["birthday"]. "</td></tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$connect->close();
?>

</table>
</body>
</html>


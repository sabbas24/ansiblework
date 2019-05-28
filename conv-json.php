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


    $mio_array = array();
    while($row = mysqli_fetch_assoc($result) ) {
    $mio_array[] = $row;
    }
    echo json_encode($mio_array);
$connect->close();
?>


<?php
    $servername = "217.71.129.139";
    $username = "root";
    $password = "Mpk234al0672ccz"; 
    $db = "osamu";
    $conn = mysqli_connect($servername, $username, $password, $db);

    $sql = "SELECT * FROM videos"
    $result = mysqli_query($conn, $sql);
?>

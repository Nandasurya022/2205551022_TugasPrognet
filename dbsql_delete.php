<?php
   $servername = "prognet.localnet";
   $username = "2205551022";
   $password = "2205551022";
   $dbname = "db_2205551022";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
    $idtodelete = $_GET['nim'];

    $sql = "DELETE FROM tb_data_mhs WHERE nim='$idtodelete'";
    if ($conn->query($sql) === TRUE){
        header("Location:dbsql_select.php");
    }
?>
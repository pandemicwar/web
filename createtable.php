<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
$host ="Server: sqlbaseofrthesite.database.windows.net,1433 \r\nSQL Database: mysqlbase\r\nUser Name: vasilevvs007\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:sqlbaseofrthesite.database.windows.net,1433; Database = mysqlbase\", \"vasilevvs007\", \"Spacedementia9\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"vasilevvs007@sqlbaseofrthesite\", \"pwd\" => \"Spacedementia9\", \"Database\" => \"mysqlbase\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:sqlbaseofrthesite.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo)";
$user = "VasilevVS007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
  $sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
?>

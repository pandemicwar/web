<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
// Connect to database.
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    
 $sql = "SELECT * FROM `sotr_tbl`";
   $result = $conn->query($sql); 
   // В цикле перебираем все записи таблицы и выводим их

   
?>

<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql =  "CREATE TABLE sotrs_tbl(
     id_sotr INT NOT NULL IDENTITY(1,1),
     fio VARCHAR(30),
     doljnost VARCHAR(30),
     spisok_projectov_sotr INT,
     PRIMARY KEY(id_sotr),
      FOREIGN KEY (spisok_projectov_sotr) REFERENCES projects_tbl (id_proj)    
     )";
    $conn->query($sql);
    }
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo "<h3>Table created.</h3>";
?>

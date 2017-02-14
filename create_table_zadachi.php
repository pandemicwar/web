
<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "CREATE TABLE zadachas_tbl(
      id_zadachi INT NOT NULL IDENTITY(1,1),
      zadacha_kr_opis VARCHAR (100),
      opisanie_razv VARCHAR (500),
      ispolnitel INT,
      zatrati_chasi INT,
      PRIMARY KEY (id_zadachi),
      FOREIGN KEY (ispolnitel) REFERENCES sotr_tbl (id_sotr)
      )";
    
    
    $conn->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo "<h3>Table created.</h3>";
?>

<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE project_tbl(
    id_proj INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id_proj),
    name_proj VARCHAR(30),
    def_proj VARCHAR(30),
    spis_sotr INT,
    FOREIGN KEY (spis_sotr) REFERENCES sotr_tbl (id_sotr))";
     $sql = "CREATE TABLE sotr_tbl(
     id_sotr INT NOT NULL IDENTITY(1,1)
     PRIMARY KEY(id_sotr),
     fio VARCHAR(30),
     doljnost VARCHAR(30),
     spisok_projectov_sotr INT,
      FOREIGN KEY (spisok_projectov_sotr) REFERENCES project_tbl (id_proj)     
     )";
      $sql = "CREATE TABLE zadacha_tbl(
      id_zadachi INT INT NOT NULL IDENTITY(1,1)
      PRIMARY KEY (id_zadachi),
      zadacha_kr_opis VARCHAR (100),
      opisanie_razv VARCHAR (500),
      ispolnitel INT,
      zatrati_chasi INT,
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


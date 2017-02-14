<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =   "CREATE TABLE project_tbl(
    id_proj INT NOT NULL IDENTITY(1,1),
    name_proj VARCHAR(30),
    def_proj VARCHAR(30),
    spis_sotr VARCHAR(500),
    PRIMARY KEY(id_proj)
   )";
    "CREATE TABLE sotr_tbl(
     id_sotr INT NOT NULL IDENTITY(1,1),
     fio VARCHAR(30),
     doljnost VARCHAR(30),
     spisok_projectov_sotr INT,
     PRIMARY KEY(id_sotr),
      FOREIGN KEY (spisok_projectov_sotr) REFERENCES project_tbl (id_proj)    
     )";
    
   
     "CREATE TABLE zadacha_tbl(
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


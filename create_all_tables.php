<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =   "CREATE TABLE soft_projects_tbl(
    id_proj INT NOT NULL IDENTITY(1,1),
    name_proj VARCHAR(30),
    def_proj VARCHAR(30),
    spis_sotr INT,
    PRIMARY KEY(id_proj)
       
   )";
    $conn->query($sql);}
    
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try {
     $sql =  "CREATE TABLE soft_sotr_tbl(
     id_sotr INT NOT NULL IDENTITY(1,1),
     fio VARCHAR(30),
     doljnost VARCHAR(30),
     spisok_projectov_sotr INT,
     PRIMARY KEY(id_sotr)   
     )";
    $conn->query($sql);}
    
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try{
     $sql = "CREATE TABLE soft_zadachi_tbl(
      soft_id INT NOT NULL,
      soft_sotr_id INT NOT NULL,
      
      PRIMARY KEY (soft_id,soft_sotr_id),
      FOREIGN KEY (soft_id) REFERENCES soft_projects_tbl (id_proj),
      FOREIGN KEY (soft_sotr_id) REFERENCES soft_sotr_table (id_sotr)
      
      )";
  $conn->query($sql); }
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try{
    
      $sql = "CREATE TABLE soft_zadachi_tbl(
      id_zadachi INT NOT NULL IDENTITY(1,1),
      zadacha_kr_opis VARCHAR (100),
      opisanie_razv VARCHAR (500),
      ispolnitel INT,
      zatrati_chasi INT,
      PRIMARY KEY (id_zadachi)
      )";
  $conn->query($sql);}

catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>

<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =   "CREATE TABLE softprojects_tbl(
    id_proj INT NOT NULL IDENTITY(1,1),
    name_proj VARCHAR(30),
    def_proj VARCHAR(30),
    PRIMARY KEY(id_proj)
       
   )";
    $conn->query($sql);}
    
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try {
     $sql =  "CREATE TABLE sottr_tbl(
     id_sotr INT NOT NULL IDENTITY(1,1),
     fio VARCHAR(30),
     doljnost VARCHAR(30),
     PRIMARY KEY(id_sotr)   
     )";
    $conn->query($sql);}
    
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try{
    
      $sql = "CREATE TABLE softzadachi_tbl(
      id_zadachi INT NOT NULL IDENTITY(1,1),
      zadacha_kr_opis VARCHAR (100),
      opisanie_razv VARCHAR (500),
      ispolnitel INT,
      zatrati_chasi INT,
      PRIMARY KEY (id_zadachi),
      FOREIGN KEY (ispolnitel) REFERENCES sottr_tbl (id_sotr)
      )" ENGINE=InnoDB;
  $conn->query($sql);}

catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
try{
     $sql = "CREATE TABLE soft_zadachi_tbl(
      soft_id INT NOT NULL,
      softsotr_id INT NOT NULL,
      
      PRIMARY KEY (soft_id,softsotr_id),
      FOREIGN KEY (soft_id) REFERENCES softprojects_tbl (id_proj),
      FOREIGN KEY (softsotr_id) REFERENCES sottr_tbl (id_sotr)
      
      )" ENGINE=InnoDB;
  $conn->query($sql); }
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";

?>

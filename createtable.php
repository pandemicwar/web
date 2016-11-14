$host ="tcp:sqlbaseofrthesite.database.windows.net,1433";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
  $sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);

<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
try {
    $conn = new PDO("sqlsrv:server = tcp:sqlbaseofrthesite.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE users(
    user_id INT NOT NULL IDENTITY(1,1) 
    user_login VARCHAR(30),
    user_password VARCHAR(30),
    PRIMARY KEY(user_id),
    user_email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo "<h3>Table created.</h3>";
?>


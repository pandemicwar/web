$host = "Server: sql-for-mybase.database.windows.net,1433 \r\nSQL Database: mybase\r\nUser Name: vasilevvs007\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:sql-for-mybase.database.windows.net,1433; Database = mybase\", \"vasilevvs007\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"vasilevvs007@sql-for-mybase\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"mybase\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:sql-for-mybase.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mybase";
  $sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);

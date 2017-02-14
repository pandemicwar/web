<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "vasilevvs007";
$pwd = "Spacedementia9";
$db = "mysqlbase";
// Connect to database.
    $conn = new PDO("sqlsrv:server = tcp:serverforsqlbase.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");
    
 $sql = "SELECT * FROM `project_tbl`";
   $result = $conn->query($sql); 
   // В цикле перебираем все записи таблицы и выводим их
 while ($row = $result->fetch_assoc())
   {
       // Оператором echo выводим на экран поля таблицы name_blog и text_blog
       echo 'Текст блога: '.$row['name_proj'];
   }
   
?>

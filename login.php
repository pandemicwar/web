<?
// Страница авторизации



# Соединямся с БД
$conn = new PDO("sqlsrv:server = tcp:sqlbaseofrthesite.database.windows.net,1433; Database = mysqlbase", "vasilevvs007", "Spacedementia9");

if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = query($conn,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($conn,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    # Сравниваем пароли
    if($data['user_password'] === ($_POST['password'])
    {
        # Генерируем случайное число и шифруем его
    

       
        # Записываем в БД новый хеш авторизации и IP
        query($conn, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        # Ставим куки
    

        # Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: check.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Войти">
</form>

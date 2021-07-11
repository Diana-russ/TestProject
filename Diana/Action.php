<?php
$charset = "utf8mb4";


//Переменные для базы
$name = $_POST['name'];
$email =$_POST['email'];
$familia =$_POST['familia'];
$othestvo =$_POST['othestvo'];
$sms =$_POST['sms'];
$imagename = $_FILES['mypic']['name'];
	$db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "ebanytii2020"; // Пароль БД
    $db_base = 'test'; // Имя БД
    $db_table = "test_table"; // Имя Таблицы БД


//Подключение к базе и запись данных
$db = new PDO("mysql:host=$db_host;dbname=$db_base;charset=$charset", $db_user, $db_password);
$data = array( 'name' => $name, 'email' => $email, 'sms' => $sms, 'familia' => $familia, 'othestvo' => $othestvo, 'image' => $imagename);
$query = $db->prepare("INSERT INTO $db_table (name,email,familia,othestvo,message,image) values (:name, :email, :familia, :othestvo, :sms, :image)");
$query->execute($data);
$result = true;
if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }


//Сохранение картинки
$image = file_get_contents($_FILES['mypic']['tmp_name']);
    file_put_contents('images\\'.$imagename, $image);





?>

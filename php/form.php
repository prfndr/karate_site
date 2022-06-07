<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$db_host = "localhost"; 
$db_user = "root"; 
$db_password = "";
$db_base = 'site_study'; 
$db_table = "form";

try {

    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    $data = array( 'name' => $name, 'phone' => $phone ); 
    $query = $db->prepare("INSERT INTO $db_table (name, phone) values (:name, :phone)");
    $query->execute($data);
    echo 1;


} catch (PDOException $e) {

    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

?>
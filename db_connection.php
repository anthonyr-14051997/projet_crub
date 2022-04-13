
<?php
$db_username = "phpmyadmin";
$db_password = "azz0Lan12";
$db_dbname = "db_projet-crud";

try {
    $db = new PDO("mysql:host=localhost;dbname=$db_dbname", $db_username, $db_password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
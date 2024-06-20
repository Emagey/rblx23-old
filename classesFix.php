<?php
class dbh{
public function connect(){
try {
$servername = "mysql0.serv00.com";
$dbname = "m4486_st3";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ));
    $connected = true;
     return $db;
} catch (PDOException $e) {
    echo "An error occurred. For Developers: " . $e->getMessage();
    exit;
  }
 }
}
?>
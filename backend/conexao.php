<?php

define('LOCAL', 'localhost');
define('USER', 'root');
define('SENHA', '');
define('BANCO', 'estoque');

try {
    $con = new PDO("mysql:host=".LOCAL.";dbname=".BANCO, USER, SENHA);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>




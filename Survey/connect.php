<?php

  $user = "will";
  $password = "rousen90";
  $host = "localhost";
  $db = "Survey";

    try{
      $pdo = newPDO("mysql:host={$host};dbname={$db};charset=utf8", $user, $password);
    }
    catch(PDOException $ex){
      die("Failed to connect to the database: " . $ex->getMessage());
    }

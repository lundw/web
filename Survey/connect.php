<?php
//This will be the file included to any page connecting to the database
  $user = "will";
  $password = "rousen90";
  $host = "localhost";
  $db = "Survey";
    //try/catch tried to connect to the database with our credentials and reports any error making the connection
    try{
      $pdo = new PDO("mysql:host={$host};dbname={$db};charset=utf8", $user, $password);
    }
    catch(PDOException $ex){
      die("Failed to connect to the database: " . $ex->getMessage());
    }

  //PDO can throw exceptions so try/catch blocks can be used to differentiate errors
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //PDO returns database as an assosciative array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  //Removes the devil's quotes if using them in an older php version
  if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
  {
      function undo_magic_quotes_gpc(&$array)
      {
          foreach($array as &$value)
          {
              if(is_array($value))
              {
                  undo_magic_quotes_gpc($value);
              }
              else
              {
                  $value = stripslashes($value);
              }
          }
      }

      undo_magic_quotes_gpc($_POST);
      undo_magic_quotes_gpc($_GET);
      undo_magic_quotes_gpc($_COOKIE);
  }

//start the session
session_start();

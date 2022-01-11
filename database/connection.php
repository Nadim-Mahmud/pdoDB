<?php

    // //$dbConfig = config::getInstance()->get('db');
    // function connect(){
    //     $db = new PDO(
    //         "mysql:host=sql6.freesqldatabase.com; dbname=sql6464972",
    //         "sql6464972",
    //         "C1eK6ge5ur"
    //     );

    //     // transfering to sqlite
    //     // $db = new PDO(
    //     //     'sqlite:bookshelf.sqlite'
    //     // );
        
    //     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    //     if(!$db){
    //         echo 'Database not connected!';
    //     }
    //     return $db;
    // }

    // $data = $db->query("SELECT * FROM `book` WHERE 1");

    // foreach($data as $key => $datum):
    //     var_dump($datum);
    // endforeach;

    function Connect(){
        $server_name = "sql6.freesqldatabase.com";
        $username = "sql6464972";
        $password = "C1eK6ge5ur";
        $db_name = "sql6464972";
        try {
            $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch(PDOException $e) {
            echo $e;
            return -1;
          }
    }

?>
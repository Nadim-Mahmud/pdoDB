<?php

    function create_if_not_exists($db){
        
        //$db->query("CREATE DATABASE IF NOT EXISTS bookshelf");
        $query_st = "CREATE TABLE IF NOT EXISTS books(
                        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        title VARCHAR(250),
                        author VARCHAR(250),
                        available VARCHAR(20),
                        isbn VARCHAR(250),
                        pages VARCHAR(250)
                    )ENGINE=InnoDb;";
        
        $db->query($query_st);

        // for sqlite 
        /** 
        $query_st = "CREATE TABLE IF NOT EXISTS books(
            id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
            title VARCHAR(250),
            author VARCHAR(250),
            available VARCHAR(20),
            isbn VARCHAR(250),
            pages VARCHAR(250)
        )";
        
        $db->query($query_st); */
        

        // $qt = "INSERT INTO books (title, author, available, isbn, pages)
        // VALUES (\"Han\", \"Solo\", 1, 1212321, 123);";
        
        // $db->query($qt);
    }
?>
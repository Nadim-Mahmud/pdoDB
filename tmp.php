<?php
    include 'database/connection.php';
    include 'database/utility.php';

    $db = connect();

    // $query_st = "CREATE TABLE IF NOT EXISTS books(
    //     id INT UNSIGNED NOT NULL AUTOINCREMENT PRIMARY KEY,
    //     title VARCHAR(250),
    //     author VARCHAR(250),
    //     available VARCHAR(20),
    //     isbn VARCHAR(250),
    //     pages VARCHAR(250)
    // )ENGINE=InnoDb;";

    //$db->query($query_st);

    $title = 'sdfd';

    $qt = "INSERT INTO books (title, author, available, isbn, pages)
    VALUES ('$title','qer','rt','wrt','w1');";

    echo $qt;

    //add($db,$title,'qer','rt','wrt','w1');
    //$db->query($qt);

    $tmp = show_table($db);
    foreach($tmp as $key => $data):
        var_dump($data);
    endforeach;

    drop($db, 1);



?>
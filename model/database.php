<?php

/*
 * Localhost Settings
 */

    $dsn = 'mysql:host=localhost;dbname=vgnostalgia';
    $username = 'mgs_user';
    $password = 'pa55word';
	
	
/*
 * Production Settings
 */

//    $dsn = 'mysql:host=mysql.vgnostalgia.com;dbname=vgnostalgia';
//    $username = 'iclientvg';
//    $password = 'iclient123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
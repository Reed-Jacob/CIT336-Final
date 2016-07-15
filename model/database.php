<?php

/*
 * Localhost Settings
 */

    $dsn = 'mysql:host=localhost;dbname=vgnostalgia';
    $username = 'mgs_user';
    $password = 'pa55word';
	

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
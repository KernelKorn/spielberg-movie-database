<?php
    $dsn = 'mysql:host=localhost;dbname=spmovies';
    $username = 'spmovies';
    $password = 'qGDLd6R7';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
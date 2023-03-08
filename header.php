<?php
    $servername='localhost';
    $username='mihwa';
    $password='mimi0823!';
    $databasename='mihwa';

    $conn=mysqli_connect($servername, $username, $password, $databasename);
    mysqli_set_charset($conn, 'utf8');

    if(!$conn){
        die('데이터베이스 서버 접속 실패');
    }
?>
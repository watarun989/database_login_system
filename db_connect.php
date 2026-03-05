<?php
    $dsn="mysql:localhost;port=8889;dbname=practice1;charset=utf8mb4"; 
    $user="root";
    $password="root";
    try {
        $pdo = new PDO($dsn, $user, $password);
        // PDOエラー時に例外を投げる
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'データベース接続失敗: ' . $e->getMessage();
        exit;
    }
?>
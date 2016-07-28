<?php
// for php7
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=rss;port=3306", "root", "123456");
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    $sql = "select * from posts where id < 20;";
    echo $sql;
    $pdo->query('set posts utf8;');
    $result = $pdo->query($sql);
    $rows = $result->fetchAll();
    foreach ($rows as $row) {
        $id = $row[0];
        $src_title = $row[1];
        $src_link = $row[2];
        $date = $row[3];
        $content = $row[4];
        $content_hash = $row[5];
        $url = $row[6];
        echo "$id\n";
        echo "$src_title\n";
        echo "$src_link\n";
        echo "$date\n";
        echo "$content\n";
        echo "$content_hash\n";
        echo "$url\n";
    }
?>

<?php
require_once ('../../config/DB_config.php');

try {
    $dbh = new PDO(DSN, DB_USER, DB_PASS);

    $sql = "select * from username where name = 'null'";

    $stmt = $dbh->query($sql);

    foreach ($stmt as $row) {
        echo '<option value='.$row['rfid_id'].'></option>';
    }
} catch (PDOException $e) {
    // エラーメッセージを表示させる
    echo 'データベースにアクセスできません！' . $e->getMessage();

    // 強制終了
    return;
}
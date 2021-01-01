<?php
$dsn        = 'mysql:host=localhost:3306;dbname=room_management;charset=utf8';
$user       = 'COSMOS';
$password   = 'PASSWORD';

try {

    // PDOインスタンスを生成
    $dbh = new PDO($dsn, $user, $password);

    //SQL文
    $sql = "select * from username";

    // SQLステートメントを実行し、結果を変数に格納
    $stmt = $dbh->query($sql);
    $stmt->execute();

    $userData = array();

    echo '<ul>';
    echo '<li>RFID_ID</li>';
    echo '<li>name</li>';
    echo '</ul>';

    // foreach文で配列の中身を一行ずつ出力
    foreach ($stmt as $row) {
        echo '<ul>';
        echo '<li>'.$row['rfid_id'].'</li>';
        echo '<li>'.$row['name'].'</li>';
        echo '</ul>';
    }


} catch (PDOException $e) {

    // エラーメッセージを表示させる
    echo 'データベースにアクセスできません！' . $e->getMessage();

    // 強制終了
    return;
}

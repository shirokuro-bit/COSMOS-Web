<?php

$dsn        = 'mysql:host=192.168.11.7:3306;dbname=room_management;charset=utf8';
$user       = 'COSMOS';
$password   = 'PASSWORD';

try {

    // PDOインスタンスを生成
    $dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {

    // エラーメッセージを表示させる
    echo 'データベースにアクセスできません！' . $e->getMessage();

    // 強制終了
    return;
}

//$sql = "SELECT * FROM zaishitu";
$sql = "SELECT time, name, zaishitu FROM zaishitu,username WHERE zaishitu.rfid_id=username.rfid_id";

// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);

// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {
    echo $row['time'].'：'.$row['name'].'：'.$row['zaishitu'];
    echo '<br>';
}
?>
<!--
PHPでMySQLに接続する（PDO）
http://www.flatflag.nir87.com/pdo_construct-912
PHPとMySQLのSELECT文でデータ取得(PDO)
https://www.flatflag.nir87.com/select-932
exit&return
https://teratail.com/questions/4586
［could not find driver］対処方法
https://blog.janjan.net/2018/10/31/php-pdo-connect-mysql8-could-not-find-driver/
-->


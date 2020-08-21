<?php


$host       = 'localhost';
$dsn        = 'mysql:host=localhost;dbname=room_management;charset=utf8';
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

$sql = "SELECT * FROM ZAISHITU";

// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);

// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {
    echo $row[''/*フィールド名*/];
    echo '<br>';
}
?>
/*
PHPでMySQLに接続する（PDO）
http://www.flatflag.nir87.com/pdo_construct-912
PHPとMySQLのSELECT文でデータ取得(PDO)
https://www.flatflag.nir87.com/select-932
exit&return
https://teratail.com/questions/4586
*/

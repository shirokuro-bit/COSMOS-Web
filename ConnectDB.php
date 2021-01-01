<?php
$dsn        = 'mysql:host=localhost:3306;dbname=room_management;charset=utf8';
$user       = 'COSMOS';
$password   = 'PASSWORD';

try {

    // PDOインスタンスを生成
    $dbh = new PDO($dsn, $user, $password);

    //SQL文
    $sql = "select * from html_output";

    // SQLステートメントを実行し、結果を変数に格納
    $stmt = $dbh->query($sql);
    $stmt->execute();

    $userData = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT )) {
        $userData[] = array(
            'time' => $row['time'],
            'name' => $row['name'],
            'zaishitu' => $row['zaishitu']
        );
    }

    //jsonとして出力
    header('Content-type: application/json');
    echo json_encode($userData);

} catch (PDOException $e) {

    // エラーメッセージを表示させる
    echo 'データベースにアクセスできません！' . $e->getMessage();

    // 強制終了
    return;
}

/*
PHPでMySQLに接続する（PDO）
http://www.flatflag.nir87.com/pdo_construct-912
PHPとMySQLのSELECT文でデータ取得(PDO)
https://www.flatflag.nir87.com/select-932
exit&return
https://teratail.com/questions/4586
［could not find driver］対処方法
https://blog.janjan.net/2018/10/31/php-pdo-connect-mysql8-could-not-find-driver/
*/

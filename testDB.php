<?php
if (
    !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    && (!empty($_SERVER['SCRIPT_FILENAME']) && 'COSMOS.php' === basename($_SERVER['SCRIPT_FILENAME']))
)
{
    die ('このページは直接ロードしないでください。');
}
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

    /*
    // foreach文で配列の中身を一行ずつ出力
    foreach ($stmt as $row) {
        echo '<p>'.$row['time'].'：'.$row['name'].'：'.$row['zaishitu'].'</p>';
    }
    echo '<br>';*/

    /*$i = 0;
    echo '<ul>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT )) {
        echo '      <li id="'.$i.'">'."\n"; //データベースのidをliに
        echo '         <p id="1" class="box">'.$row['time'].'</p>'."\n";
        echo '         <p id="2" class="box">'.$row['name'].'</p>'."\n";
        echo '         <p id="3" class="box">'.$row['zaishitu'].'</p>'."\n";
        echo '      </li>'."\n";
        $i++;
        $userData[] = array(
            'time' => $row['time'],
            'name' => $row['name'],
            'zaishitu' => $row['zaishitu']
        );
    }
    echo '</ul>';*/

} catch (PDOException $e) {

    // エラーメッセージを表示させる
    echo 'データベースへ接続出来ないかエラーです';

    // 強制終了
    return;
}


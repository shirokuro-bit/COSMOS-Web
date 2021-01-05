<?php

require_once('../../config/DB_config.php');

if (isset($_POST['rfid_id'])) {
    try {
        // PDOインスタンスを生成
        $dbh = new PDO(DSN, DB_USER, DB_PASS);

        //SQL文
        $sql = 'update username set name = ? where rfid_id = ?';

        // SQLステートメントを実行し、結果を変数に格納
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($_POST['name'], (int)$_POST['rfid_id']));
        echo '登録完了'."\n".'RFID：'.$_POST['rfid_id']."\n".'名前：'.$_POST['name'];

    } catch (PDOException $e) {
        // エラーメッセージを表示させる
        echo 'データベースにアクセスできません！' . $e->getMessage();

        // 強制終了
        return;
    }
}else {
    echo '<p>empty</p>';
}

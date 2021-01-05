<?php

require_once ('../../config/DB_config.php');

//DB内でPOSTされたメールアドレスを検索
try {
    $pdo = new PDO(DSN, DB_USER, DB_PASS);
    $stmt = $pdo->prepare('select * from username where name = ?');
    $stmt->execute([$_POST['name']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}
//emailがDB内に存在しているか確認
if (!isset($row['name'])) {
    echo 'false';
}else if (isset($row['name'])) {
    echo 'true';
}

//パスワード確認後sessionにメールアドレスを渡す
/*if (password_verify($_POST['password'], $row['password'])) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['EMAIL'] = $row['email'];
    echo 'ログインしました';
} else {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
}*/
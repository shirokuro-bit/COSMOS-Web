<?php
require 'ConnectDB.php';
$cls = new ConnectDB();

$stmt = $cls->read("select * from html_output");

if (strcmp($stmt[0],'done') == 0) {
    $userData = array();

    echo '<div id="table">';
    echo '<ul>';
    echo '<li>time</li>';
    echo '<li>name</li>';
    echo '<li>zaishitu</li>';
    echo '</ul>';

    foreach ($stmt[1] as $row) {
        echo '<ul>';
        echo '<li>'.$row['time'].'</li>';
        echo '<li>'.$row['name'].'</li>';
        echo '<li>'.$row['zaishitu'].'</li>';
        echo '</ul>';
    }
}elseif (strcmp($stmt[0],'fail') == 0) {
    echo $stmt[1];
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

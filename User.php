<?php
require 'ConnectDB.php';
$cls = new ConnectDB();

$stmt = $cls->read("select * from username");

if (strcmp($stmt[0],'done') == 0) {
    $userData = array();

    echo '<div id="table">';
    echo '<ul>';
    echo '<li>RFID_ID</li>';
    echo '<li>name</li>';
    echo '</ul>';

    // foreach文で配列の中身を一行ずつ出力
    foreach ($stmt[1] as $row) {
        echo '<ul>';
        echo '<li>'.$row['rfid_id'].'</li>';
        echo '<li>'.$row['name'].'</li>';
        echo '</ul>';
    }
    echo '</div>';
}elseif (strcmp($stmt[0],'fail') == 0) {
    echo $stmt[1];
}
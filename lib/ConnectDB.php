<?php
class ConnectDB {
    const dsn = 'mysql:host=localhost:3306;dbname=room_management;charset=utf8';
    const user = 'COSMOS';
    const password = 'PASSWORD';
    public $sql;
    public $result;

    function read($sql) {
        try {
            // PDOインスタンスを生成
            $dbh = new PDO(self::dsn, self::user, self::password);

            //SQL文
            $this->sql = $sql;

            // SQLステートメントを実行し、結果を変数に格納し返却
            $this->result = 'done';
            return array($this->result,$dbh->query($sql));
            //return $dbh->query($sql);


        } catch (PDOException $e) {
            // エラーメッセージ
            $error = '<p>データベースにアクセスできません！' .$e->getMessage(). '</p>';

            //
            $this->result = 'fail';
            return array($this->result,$error);
        }
    }
}
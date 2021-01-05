<div id="sing-up">
    <form method="post" action="Sing-Up-insert.php" id="Sing-Up-form">
        <fieldset>
            <legend>コンボボックスサンプル</legend>
            <label for="rfid_id">RFID-ID：</label><input type="text" name="rfid_id" list="rfid" id="rfid_id" autocomplete="off">
            <datalist id="rfid">
                <?php
                require_once ('../../config/DB_config.php');

                try {
                    $dbh = new PDO(DSN, DB_USER, DB_PASS);

                    $sql = "select * from username where name = 'null'";

                    $stmt = $dbh->query($sql);

                    foreach ($stmt as $row) {
                        echo '<option value='.$row['rfid_id'].'></option>';
                    }
                } catch (PDOException $e) {
                    // エラーメッセージを表示させる
                    echo 'データベースにアクセスできません！' . $e->getMessage();

                    // 強制終了
                    return;
                }
                ?>
            </datalist>
            <br>
            <label>氏名：<input type="text" name="name" id="name" size="10" maxlength="10" required></label>
            <br>
            <input type="submit" value="送信" id="button">
        </fieldset>
    </form>
    <p id="test"></p>
</div>
<script type="text/javascript" src="js/Sing-Up.js"></script>

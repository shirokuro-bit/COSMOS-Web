<div id="sing-up">
    <form method="post" action="Sing-Up-update.php" id="Sing-Up-form">
        <fieldset>
            <legend>コンボボックスサンプル</legend>
            <label for="rfid_id">RFID-ID：</label><input type="text" name="rfid_id" list="rfid" id="rfid_id" autocomplete="off">
            <datalist id="rfid">
                <?php include ('Sing-Up-select.php'); ?>
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

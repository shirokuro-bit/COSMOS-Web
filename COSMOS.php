<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSMOS</title>
    <link rel="stylesheet" href="./css/COSMOS.css">
</head>
<body>
<div id="wrapper">
    <!--ローディング画面-->
    <div id="loading">
        <div id="spinner"></div>
    </div>

    <!--コンテンツ部分-->
    <div id="header">
        <h1>COSMOS在室管理システム</h1>
    </div>
    <!--<div id="side">
        <?php /*include ('./side.php'); */?>
    </div>-->
    <div id="main">
        <p id="content"></p>
    </div>

    <div id="footer">
        <p>test End</p>
    </div>
</div>
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="./js/loading.js"></script>
<script type="text/javascript" src="./js/LoadSQL-Ajax.js"></script>
</body>
</html>
<!--PHPをコマンドラインで実行して簡易ウェブサーバーを立ち上げる
https://xn--web-oi9du9bc8tgu2a.com/php-web-server/-->
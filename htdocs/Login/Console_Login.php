<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Login.css">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=AKrtjWXhPEm7hh_Vb6LF4ht1DtqROLeFlql9UtilZrHIyjSzjaosrr2zdAVFw4lIyj1jgqaLiOOp1woPGubHAx4mWZjx8B830KV_P2B91E6CahIJRyVqxp_Z0AcZH6Q7TvGAVwL-diqCHiIqk1C_EGJo7CgN6stZX6jJEFg0U3o" charset="UTF-8"></script></head>
<body>
<div id="main">
    <div id="content">
        <div id="logo">
            <h1>COSMOS</h1>
        </div>
        <div id="input">
            <div>
                <h1 id="title">ログイン</h1>
            </div>
            <div>
                <p id="miss"></p>
                <form action="Login.php" method="post" id="login">
                    <label for="name"></label><input type="text" name="name" placeholder="ユーザー名" id="name">
                    <label for="password"></label><input type="password" name="password" placeholder="パスワード" id="password">
                    <input type="submit" value="Login" id="button">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/Login.js"></script>
</body>
</html>
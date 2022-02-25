<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="glfindex.css">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }
        </style>
        <title>ログイン</title>
    </head>

    <body>

        <header>
            ログイン画面
        </header>
        
        <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
        <form name="form1" action="login_act.php" method="post">
            ID:<input type="text" name="lid" />
            PW:<input type="password" name="lpw" />
            <input type="submit" value="LOGIN" />
        </form>
        
        <br><br><br>
        
        <a class="btn btn-custom01" href="./index.php">
        <span class="btn-custom01-front">スコア登録</span>
        <i class="fas fa-angle-right fa-position-right"></i>
        </a>

        <a class="btn btn-custom01" href="./top.php">
        <span class="btn-custom01-front">ＴＯＰ</span>
        <i class="fas fa-angle-right fa-position-right"></i>
        </a>  
        
        <a class="btn btn-custom01" href="./logout.php">
        <span class="btn-custom01-front">ログアウト</span>
        <i class="fas fa-angle-right fa-position-right"></i>
        </a>

    </body>

</html>

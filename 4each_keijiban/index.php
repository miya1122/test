<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    
    $pdo = new PDO("mysql:dbname=saya_miyazawa;host=localhost;","root","root");
    
    $stmt =$pdo->query("select*from 4each_keijiban");
    
    ?>
    
    
    <header>
        <div class="headerlogo"><img src="4eachblog_logo.jpg"></div>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合せ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="box1">
            <h1 class="logo">プログラミングに役立つ掲示板</h1>
       
            <div class="box2">
                <h2>入力フォーム</h2>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" name="handlename" size="35">
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" name="title" size="35">            
                    </div>
                
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" row="7" cols="35"></textarea>
                    </div>
                
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
            </div>
            
            <div class="box3">
            
            <?php
        
            while($row=$stmt->fetch()){
                
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='comments'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
            
            }
            
            ?>
            </div>
            
            
        </div>
    
        <div class="box5">
                    <h4 class="logo2">人気の記事</h4>
                        <ul>
                            <li>PHP オススメ本</li>
                            <li>PHP MyAdinの使い方</li>
                            <li>今人気のエディタTop5</li>   
                            <li>HTMLの基礎</li>
                        </ul>
                    <h4 class="logo2">オススメリンク</h4>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>   
                            <li>Bracketsのダウンロード</li>
                        </ul>
                    <h3 class="logo2">カテゴリ</h3>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>   
                            <li>JavaScript</li>
                        </ul>
                
                </div>
                
    
        <footer>
        copyright internous | 4each blog is the one which provides A to Z aboutprogrammig.
        </footer>
    
    </main>
    
</body>    

</html>
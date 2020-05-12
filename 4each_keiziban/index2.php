<!DOCTYPE html>
<html lang="jp">
    <head>
       <meta charset="UTF-8">
       <title>掲示板</title>
       <link rel="stylesheet"type="text/css"href="style9.css">    
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=4each;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keiziban");
        
       
        ?>

        
          <img src="4eachblog_logo.jpg" class="example1">   
    <header>
       
        
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul> 
           
     </header>
        
    <main>
     <div class="main-container">
        <div class="left">
            <h1>プログラミングに役立つ書籍</h1>
            
     
        <form method="post" action="insert3.php" >
        <div>
            <h3>入力フォーム</h3>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>
        <div>    
        <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
        
                
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>    
          
            
        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>    
        </form> 
            
      
      
           
            <?php
            
            while($row = $stmt->fetch()) {
                
               
                echo"<div class='kiji'>";
                echo"<h4>".$row['title']."</h4>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
               
            }
            ?>
           
            
             
            
         </div>
        <div class="right">   
            
            <h2>人気の記事</h2>
            
            <ul>
            
            <li>PHPおすすめ本</li>
            
            <li>PHP MyAdminの使い方</li>
            
            <li>今人気のエディタ　Top5</li>
            
            <li>HTMLの基礎</li>
                 
            </ul>

            
            <h2>おすすめリンク</h2>
            
            <ul>
             
             <li>インターノウス株式会社</li>
             
             <li>XAMPPのダウンロード</li>
             
             <li>Eclipseのダウンロード</li>
             
             <li>Bracketsのダウンロード</li>
            
            </ul>    
                 
            
            <h2>カテゴリ</h2>
            
            <ul>
            
             <li>HTML</li>
             
             <li>PHP</li>
             
             <li>MySOL</li>
             
             <li>javaScript</li>
                
            </ul>    
            
                
         </div>     
         
        </div>    
        </main>
        
        <footer>
          copyright ©︎ internous | 4each blog the which provides A to Z about programming.
    
        </footer>
        
   
    </body>    
    
</html>
<?php require_once('hotelsData.php'); 
$user = "root";
$pass = "aoki0327";
    $dbh = new PDO('mysql:host=localhost;dbname=hotel_app;charset=utf8',$user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from hotels where area_id = 2";
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>hotel_sales_top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./responsive.css">
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <div class="header-left">
            <img class="logo" src="./images/1200px-His_logo_blue.svg.png">
        </div>

        

    </header>

    <div id="search" class="main">
        　 <div class="breadcrumbs-wrapper">
            <p><span class="breadcrumb-highlight">①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span>③旅行情報入力</span>.............<span>④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
            </div>
           <div class="under-bar"></div>
            
           <div class="searchResult-hotels-wrapper">
                <div class="searchResult-wrapper">
                    
                    <?php foreach($result as $hotel_k):?>
                    <div class="searchResult-hotel">
                        <a href="#"><img class="hotel" src="<?php echo $hotel_k['topHotelImage'] ?>"></a>
                        <p><?php echo $hotel_k['name'] ?></p>
                        <p class="price"><?php echo $hotel_k['lowerLimitPrice']?>円〜<?php echo $hotel_k['upperLimitPrice'] ?>円</p>
                    </div>
                    <?php endforeach ?>
                    </div>
                </div>
               
    
    
    
           </div>
    
    
    
    
        </div><!--</main>-->

        <footer>
            <div class="footer-wrapper">
                <div class="footer-left">
                    <img class=logo src="./images/1200px-His_logo_blue.svg.png">
                <div class="footer-right">
                    <p class="footer-contents"><a href="#">初めての方へ</a></p>
                    <p class="footer-contents"><a href="#">よくあるご質問</a></p>
                    <p class="footer-contents"><a href="#">お問い合わせ</a></p>
                    <a href="#"><i class="fab fa-line size line"></i></a>
                    <a href="#"><i class="fas fa-envelope-square size mail"></i></a>
                    <a href="#"><i class="fab fa-twitter-square size twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square size facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram size instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube-square size youtube"></i></a>
                    
                </div>    
                </div>
    
    
            </div>
    
        </footer>
        
    
    
    <script src="./script.js"></script>
</body>



















</html>
<?php 
require_once('dbConnectClass.php'); 

    $dbh = new dbConnectClass();
    $result = $dbh->getHotelsDataFromAreaId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>hotel_sales_top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="../stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../responsive.css">

</head>
<body>
    <header>
        <div class="header-left">
        <a href="../Top.html"><img class="logo" src="../images/logo/1200px-His_logo_blue.svg.png"></a>
        </div>
        <div class="clear"></div>
    </header>
    <div id="search" class="main">
        <div class="breadcrumbs-wrapper">
            <p><span class="breadcrumb-highlight">①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span>③旅行情報入力</span>.............<span>④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
        </div>
        <div class="under-bar"></div>       
        <div class="searchResult-hotels-wrapper">     
            <form class="searchResult-wrapper" action="selectedHotel.php" method="GET">
                <?php foreach($result as $hotels):?>
                    <div class="searchResult-hotel">
                        <a href="../selectedHotel.php/?id=<?php echo $hotels['ID']?>"><img class="hotel" src="<?php echo $hotels['topHotelImage'] ?>"></a>
                        <p class="searchResult-hotel-name"><?php echo $hotels['name'] ?></p>
                        <p class="searchPrice"><?php echo $hotels['lowerLimitPrice']?><span class="JPY">円〜</span><?php echo $hotels['upperLimitPrice'] ?><span class="JPY">円</span></p>        
                    </div>   
                <?php endforeach ?>
            </form>
        </div>
    </div>

        <footer>
            <div class="footer-wrapper">
                <div class="footer-left">
                <a href="../Top.html"><img class=logo src="../images/logo/1200px-His_logo_blue.svg.png"></a>
                </div>    
                <div class="footer-right">
                <p class="footer-contents"><a href="https://www.his-j.com/support/guide/beginner.html">初めての方へ</a></p>
                <p class="footer-contents"><a href="https://help.his-j.com/#/">よくあるご質問</a></p>
                <p class="footer-contents"><a href="https://member.his-j.com/pc/Contents/inquiry.html">お問い合わせ</a></p>
                <a href="https://www.his-j.com/info/line/"><i class="fab fa-line size line"></i></a>
                <a href="https://www.his-j.com/express/"><i class="fas fa-envelope-square size mail"></i></a>
                <a href="https://www.facebook.com/H.I.S.Japan"><i class="fab fa-twitter-square size twitter"></i></a>
                <a href="https://twitter.com/HIS_japan"><i class="fab fa-facebook-square size facebook"></i></a>
                <a href="https://www.instagram.com/his_japan/"><i class="fab fa-instagram size instagram"></i></a>
                <a href="https://www.youtube.com/user/HISjapan"><i class="fab fa-youtube-square size youtube"></i></a>    
            </div>    
                <div class="clear"></div>
            </div>
        </footer>

    <script src="./script.js"></script>
</body>



















</html>
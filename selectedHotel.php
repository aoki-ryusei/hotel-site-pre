<?php
$user = "root";
$pass = "aoki0327";
    $dbh = new PDO('mysql:host=localhost;dbname=hotel_app;charset=utf8',$user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from hotels where ID = ". $_GET['id'];
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $hotel = $result[0];
   
?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>hotel_sales_top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="../stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../responsive.css">
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="header-left">
        <a href="../Top.html"><img class="logo" src="../images/logo/1200px-His_logo_blue.svg.png"></a>
        </div>
        <div class="clear"></div>
    </header>

    <div id="search" class="main">
        　 <div class="breadcrumbs-wrapper"> <!--ぱんくずリスト -->
                <p><span>①ホテル選択</span>.............<span class="breadcrumb-highlight">②ホテル詳細・客室選択</span>.............<span>③旅行情報入力</span>.............<span>④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
           </div>
           <div class="under-bar"></div>
            
           <div class="searchResult">
               <div class="overview-hotel">
                   <div id="hotelImage" class="hotel-image">
                        <img src="<?php echo $hotel['topHotelImage']?>" alt="" class="img img_m">
                        <img src="<?php echo $hotel['hotelImage1']?>" alt="" class="img">
                        <img src="<?php echo $hotel['hotelImage2']?>" alt="" class="img">
                        <img src="<?php echo $hotel['hotelImage3']?>" alt="" class="img">
                        <img src="<?php echo $hotel['hotelImage4']?>" alt="" class="img">
                   </div>
                   <h2 class="hotel-name"><?php echo $hotel['name'] ?></h2>
                   <h3 class="hotel-review">評価  <?php echo $hotel['review']?></h3>
                   <section class="price-infomation">
                            <div class="price">
                                <p><?php echo $hotel['upperLimitPrice']?>円<span>/1泊</span></p>
                                
                                <p>税及びサービス料別</p>
                            </div>
                            <a href="../customerInfomation.php/?id=<?php echo $hotel['ID']?>"><input class="reservation" type="submit" value="予約"></a>
                    </section>
                    <div class="clear"></div>
               </div><!--</overview-hotel>--> 
           </div><!--</searchResult>--> 
        </div><!--</main>--> 
    <script src="./script.js"></script>
</body>



















</html>
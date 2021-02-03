
<?php
session_start();
$name = $_POST['name'];
$nameKana = $_POST['name-kana'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$postalCode = $_POST['postal-code'];
$prefectures = $_POST['prefectures'];
$municipality = $_POST['municipality'];
$street = $_POST['street'];
$apartment = $_POST['apartment'];
$phoneNumber = $_POST['phone-number'];
$emergencyContact = $_POST['emergency-contact'];
$mailAddress = $_POST['mail-address'];
$checkInTime = $_POST['checkIn-time'];
$transportation = $_POST['transportation'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>hotel_sales_top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./responsive.css">

</head>

<body>

    <header>
        <div class="header-left">
        <a href="./Top.html"><img class="logo" src="./images/logo/1200px-His_logo_blue.svg.png"></a>
        </div>
        <div class="clear"></div>
    </header>
    <div class="main">
        <div class="breadcrumbs-wrapper"> 
            <p><span>①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span>③旅行情報入力</span>.............<span class="breadcrumb-highlight">④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
        </div>
        <form class="customer-infomation" method="POST" action="./procedureCompleted.php">
            <div class="reservation-person-infomation">　
                <h2 class="reservation-title">予約者（代表者）情報入力</h2>
        　              <h3 class="resevation-subtitle">氏名（漢字）</h3>
                            <input class="getForm" name="name" readonly value="<?php echo $_POST['name']; ?>">
               　　     <h3 class="resevation-subtitle">氏名（カナ）</h3>
                            <input class="getForm" name="name-kana"readonly value="<?php echo $_POST['name-kana']; ?>">
                        <h3 class="resevation-subtitle">性別</h3>
                            <input class="getForm" name="gender" readonly value="<?php echo $_POST['gender']; ?>">
                        <h3 class="resevation-subtitle">年齢</h3>
                            <input class="getForm" name="age" readonly value="<?php echo $_POST['age']; ?>">
                        <h3 class="resevation-subtitle">住所</h3>
                            <h4 class="resevation-minititle">郵便番号</h4>
                                <input class="getForm" name="postal-code" readonly value="<?php echo $_POST['postal-code']; ?>">
                            <h4 class="resevation-minititle">都道府県</h4>
                                <input class="getForm" name="prefectures" readonly value="<?php echo $_POST['prefectures']; ?>">
                            <h4 class="resevation-minititle">市区町村</h4>
                                <input class="getForm"  name="municipality" readonly value="<?php echo $_POST['municipality']; ?>">
                            <h4 class="resevation-minititle">町名番地</h4>
                                <input class="getForm"  name="street" readonly value="<?php echo $_POST['street']; ?>">
                            <h4 class="resevation-minititle">マンションなど</h4>
                                <input class="getForm"  name="apartment" readonly value="<?php echo $_POST['apartment']; ?>">
                        <h3 class="resevation-subtitle">電話番号</h3>
                            <input class="getForm"  name="phone-number" readonly value="<?php echo $_POST['phone-number']; ?>">
                        <h3 class="resevation-subtitle">電話番号（緊急連絡先）</h3>
                            <input class="getForm"  name="emergency-contact" readonly value="<?php echo $_POST['emergency-contact']; ?>">
                        <h3 class="resevation-subtitle">メールアドレス</h3>
                            <input class="getForm" name="mail-address" readonly value="<?php echo $_POST['mail-address']; ?>"> 
            </div> 
            <div class="checkin-infomation">
                <h2 class="reservation-title" >チェックイン・交通手段の選択</h2>
                        <p class="resevation-subtitle">チェックイン時間</p>
                            <input class="getForm" name="checkIn-time" readonly value="<?php echo $_POST['checkIn-time']; ?>">
                        <p class="resevation-subtitle">宿泊施設への交通手段</p>
                            <input class="getForm" name="transportation" readonly value="<?php echo $_POST['transportation']; ?>">
            </div> 
            </div> 
            <div class="reservation-confirmed-button-wrapper">
                <input type="submit" class="reservation-confirmed-button" value="この内容で予約する">
            </div>
        </form>
    </div>   

</body>
</html>
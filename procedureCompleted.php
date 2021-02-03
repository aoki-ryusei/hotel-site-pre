
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
// データベースに情報を出力
try {
    $user = "root";
    $pass = "aoki0327";
        $dbh = new PDO('mysql:host=localhost;dbname=a_personalData;charset=utf8',$user, $pass);
        $sql = 'INSERT INTO personalData (name,nameKana,gender,age,postalCode,prefectures,municipality,street,apartment,phoneNumber,emergencyContact,mailAddress,checkInTime,transportation)
        VALUES(:name,:nameKana,:gender,:age,:postalCode,:prefectures,:municipality,:street,:apartment,:phoneNumber,:emergencyContact,:mailAddress,:checkInTime,:transportation)';
            $params = array(
            ':name'=>$name,
            ':nameKana'=>$nameKana,   
            ':gender'=>$gender,
            ':age'=>$age,
            ':postalCode'=>$postalCode,
            ':prefectures'=>$prefectures,
            ':municipality'=>$municipality,
            ':street'=>$street,
            ':apartment'=>$apartment,
            ':phoneNumber'=>$phoneNumber,
            ':emergencyContact'=>$emergencyContact,
            ':mailAddress'=>$mailAddress,
            ':checkInTime'=>$checkInTime,
            ':transportation'=>$transportation
            );
    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);


} catch (Exception $e) {
    var_dump($e);
    exit;
} 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <div class="header-left">
            <a href="./Top.html"><img class="logo" src="./images/logo/1200px-His_logo_blue.svg.png"></a>
        </div>
        <div class="clear"></div>    
    </header>
    <div class="completed-main">
        <div class="completed-main-wrapper">
            <div class="completed-title">
                <h1>ご予約が完了しました</h1>
            </div>
            <div class="completed-contents">
                <p class="reservation-name"><?php echo $name;?> 様</p>　
                <p>ご予約・ご決済ありがとうございました。これにて「旅行の確保」と「旅行契約」が成立いたしました。安心してご旅行をお楽しみ下さい。</p>
                <p class="reservation-number" >お客様の予約No.は、「0000000000」です。</p>
                <p>ご登録のメールアドレスへのご完了のメールをお送りしております。必ずご確認お願いします。</p>
                <ul class="notes">
                    <li>受信設定によっては迷惑メールボックスへ受信される事もございます。</li>
                    <li>メールが届かない場合は、必ずメールもしくはお電話にて弊社までご連絡お願いいたします。</li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-wrapper">
            <div class="footer-left">
            <a href="./Top.html"><img class=logo src="./images/logo/1200px-His_logo_blue.svg.png"></a>
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
        </div> 
    </footer>
</body>



















</html>
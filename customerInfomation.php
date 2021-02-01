

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
    <link rel="stylesheet" href="./responsive.css">
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- ヘッダー -->
    <header> 
        <div class="header-left">
            <img class="logo" src="../images/1200px-His_logo_blue.svg.png">
        </div>
    </header>

    <div class="main">
    <div class="breadcrumbs-wrapper"> <!--ぱんくずリスト -->
                <p><span>①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span class="breadcrumb-highlight">③旅行情報入力</span>.............<span>④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
           </div>
        <form method="POST" action="../confirm.php">
            <div class="customer-infomation">
                <div class="reservation-person-infomation"> <!-- 予約者情報 -->
                    <h2 class="reservation-title">予約者（代表者）情報入力</h2>
                        <h3 class="resevation-subtitle">氏名（漢字）</h3>
                            <input class="input-form" name="name" type="text" placeholder="山田太郎" required>
                        <h3 class="resevation-subtitle">氏名（カナ</h3>
                            <input  class="input-form" name="name-kana" type="text" placeholder="ヤマダタロウ"　required>
                        <h3 class="resevation-subtitle">性別</h3>
                            <input class="input-form" name="gender" required>
                        <h3 class="resevation-subtitle">年齢</h3>
                            <select class="input-form" name="age" required>
                                <option value="未選択" required>選択して下さい</option>
                                <?php for($i=1;$i<=100;$i++) {
                                echo "<option value='$i'>$i</option>";
                                }?>
                            </select>   
                        <h3 class="resevation-subtitle">住所</h3>
                            <p class="resevation-minititle">郵便番号</p>
                                <input class="input-form" name="postal-code" type="text" placeholder="000-0000" required>  
                            <p class="resevation-minititle">都道府県</p>
                                <input class="input-form" name="prefectures" type="text" placeholder="◯◯県" required>
                            <p class="resevation-minititle">市区町村</p>
                                <textarea class="input-form" name="municipality" type="text" required></textarea>
                            <p class="resevation-minititle">町名番地</p>
                                <textarea class="input-form" name="street" type="text" required></textarea>
                            <p class="resevation-minititle">マンションなど</p>
                                <textarea class="input-form" name="apartment" type="text"></textarea>
                            <h3 class="resevation-subtitle">電話番号</h3>
                                <input class="input-form" name="phone-number" type="tel"　placeholder="000-0000-0000" required> 
                            <h3 class="resevation-subtitle">電話番号（緊急連絡先）</h3>
                                <input class="input-form" name="emergency-contact" type="tel">
                            <h3 class="resevation-subtitle">メールアドレス</h3>
                                <input class="input-form" name="mail-address" type="email" required>
                </div> <!--<div class="reservation-person-infomation">-->
                <div class="checkin-infomation">
                    <h2 class="reservation-title">チェックイン・交通手段の選択</h2>
                        <h3 class="resevation-subtitle">チェックイン時間</h3>
                            <select class="input-form" name="checkIn-time"  required>
                                <option value="未選択">選択して下さい</option>
                                <?php for($i=15;$i<19;$i++) {
                                echo "<option value='$i'>$i:00</option>";
                                }?>
                            </select>
                        <h3 class="resevation-subtitle">宿泊施設への交通手段</h3>
                            <input class="input-form" type="text" name="transportation" required>
                </div> <!--<div class="checkin-infomation">-->
            </div> <!--<div class="customer-infomation">-->
                <div class="consent-personal-infomation">
                    <h2 class="reservation-title">個人情報取扱についての同意</h2>
                        <p>入力いただくお客様の個人情報は、当該旅行サービスのご案内のみに使用し、それ以外の目的で使用する事はあございません。また、お申し込みいただいた当該旅行サービスの手続きに必要な範囲内で、手配代行者に対しお客様の個人情報を提供いたします。さらに、今後のお客様のご旅行申し込みを簡素化するためにHISグループ企業とお客様の個人情報を共有する場合がございます。</p>
                        <p>上記にご同意いただける場合は「個人情報の取り扱いについて同意します」にチェックをいれてください。</p>
                            <p><input type="checkbox" class="personal-infomation-checkbox" required>個人情報に取り扱いについて同意します</p>
                </div> <!--<div class="consent-personal-infomation">-->
                <div class="submit-button-wrapper">
                    <input type="submit" class="submit-button" value="予約・購入情報確認へ進む">          
                </div>    
        </form> <!--<form method="POST" action="./confirm.php">-->
    </div><!--</main>-->  
    <script src="./script.js"></script>
</body>
</html>
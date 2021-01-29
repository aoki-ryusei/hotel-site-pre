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

    <div class="main">
    <div class="breadcrumbs-wrapper">
                <p><span>①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span>③旅行情報入力</span>.............<span class="breadcrumb-highlight">④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
           </div>
        <form class="customer-infomation">
            <div class="reservation-person-infomation">
                <h2 class="reservation-title">予約者（代表者）情報入力</h2>
                <h3 class="resevation-subtitle">氏名（漢字）</h3>
                <p class="getForm"><?php echo $_POST['name']; ?></p>
                <h3 class="resevation-subtitle">氏名（カナ）</h3>
                <p class="getForm"><?php echo $_POST['name-kana']; ?></p>
                <h3 class="resevation-subtitle">性別</h3>
                <p class="getForm"><?php echo $_POST['gender']; ?></p>
                <h3 class="resevation-subtitle">年齢<</h3>
                <p class="getForm"><?php echo $_POST['age']; ?></p>
                <h3 class="resevation-subtitle">住所</h3>
                <p class="resevation-minititle">郵便番号</p>
                <p class="getForm"><?php echo $_POST['postal-code']; ?> </p>
                <p class="resevation-minititle">都道府県</p>
                <p class="getForm"><?php echo $_POST['prefectures']; ?></p>
                <p class="resevation-minititle">市区町村</p>
                <p class="getForm"><?php echo $_POST['municipality']; ?></p>
                <p class="resevation-minititle">町名番地</p>
                <p class="getForm"><?php echo $_POST['street']; ?></p>
                <p class="resevation-minititle">マンションなど</p>
                <p class="getForm"><?php echo $_POST['apartment']; ?></p>
                <h3 class="resevation-subtitle">電話番号</h3>
                <p class="getForm"><?php echo $_POST['phone-number']; ?></p>
                <h3 class="resevation-subtitle">電話番号（緊急連絡先）</h3>
                <p class="getForm"><?php echo $_POST['emergency-contact']; ?></p>
                <h3 class="resevation-subtitle">メールアドレス</h3>
                <p class="getForm"><?php echo $_POST['mail-adress']; ?></p>

            </div>
            <div class="payment-infomation">
                <h2 class="reservation-title">お支払い方法の選択</h2>
                <h3 class="resevation-subtitle">お支払い情報</h3>
                <p><input type="radio">現地払い</p>
                <p><input type="radio">事前払い</p>
                <p class="resevation-minititle">カード番号</p>
                <p  class="getForm"><?php echo $_POST['credit-code']; ?></p>
                <p class="resevation-minititle">セキュリティコード</p>
                <p class="getForm"><?php echo $_POST['cvv-cvc-code']; ?></p>
                <p class="resevation-minititle">有効期限</p>
                <p class="getForm"><?php echo $_POST['expiration-date']; ?></p>
                <p class="resevation-minititle">支払い回数</p>
                <p class="getForm"><?php echo $_POST['number-of-payment']; ?></p>
            </div>
            <div class="checkin-infomation">
                <h2 class="reservation-title">チェックイン・交通手段の選択</h2>
                <h3 class="resevation-subtitle">チェックイン時間</h3>
                <p class="getForm"><?php echo $_POST['mail-adress']; ?></p>
                <h3 class="resevation-subtitle">宿泊施設への交通手段</h3>
                <p class="getForm"><?php echo $_POST['mail-adress']; ?></p>
            </div> 
            <div class="plan-confirm">
                <h2 class="hotel-name reservation-title">ホテル名</h2>
                <p class="plan-code">商品名</p>
                <p>##</p>
                <p class="plan-code">利用日</p>
                <p>##</p>
                <p class="plan-code">泊数</p>
                <p>##</p>
                <p class="plan-code">人数・客室</p>
                <p>##</p>
                <p class="plan-code">プラン条件</p>
                <p>##</p>
            </div>  
        </form>


        <div class="reservation-confirmed-button-wrapper">
            <p><a href="./procedurecompleted.html" class="reservation-confirmed-button">この内容で予約する</a></p>
        </div>



        </div><!--</main-wrapper>-->
    </div><!--</main>-->
    
    
    
    
    <script src="./script.js"></script>
</body>



















</html>
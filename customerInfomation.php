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
                <p><span>①ホテル選択</span>.............<span>②ホテル詳細・客室選択</span>.............<span class="breadcrumb-highlight">③旅行情報入力</span>.............<span>④旅行者情報確認</span>.............<span>⑤予約手続き完了</span></p>
           </div>

        <form method="POST" action="./confirm.php">
            <div class=customer-infomation>
                <div class="reservation-person-infomation">
                    <h2 class="reservation-title">予約者（代表者）情報入力</h2>
                    <h3 class="resevation-subtitle">氏名（漢字）</h3>
                    <input class="input-form" name="name" type="text" placeholder="山田太郎"><p class="mandatory">※必須</p>
                    <h3 class="resevation-subtitle">氏名（カナ）<span class="mandatory">※必須</span></h3>
                    <input  class="input-form" name="name-kana" type="text" placeholder="ヤマダタロウ">
                    <h3 class="resevation-subtitle">性別<span class="mandatory">※必須</span></h3>
                    <input class="input-form" name="gender">
                    <h3 class="resevation-subtitle">年齢<span class="mandatory">※必須</span></h3>
                        <select class="input-form" name="age">
                            <option value="未選択">選択して下さい</option>
                            <?php for($i=1;$i<=100;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>   
                    <h3 class="resevation-subtitle">住所</h3>
                    <p class="resevation-minititle">郵便番号<span class="mandatory">※必須</span></p>
                    <input class="input-form" name="postal-code" type="text" placeholder="000-0000">  
                    <p class="resevation-minititle">都道府県<span class="mandatory">※必須</span></p>
                    <input class="input-form" name="prefectures" type="text" placeholder="◯◯県">
                    <p class="resevation-minititle">市区町村<span class="mandatory">※必須</span></p>
                    <textarea class="input-form" name="municipality" type="text"></textarea>
                    <p class="resevation-minititle">町名番地<span class="mandatory">※必須</span></p>
                    <textarea class="input-form" name="street" type="text"></textarea>
                    <p class="resevation-minititle">マンションなど<span class="mandatory">※必須</span></p>
                    <textarea class="input-form" name="apartment" type="text"></textarea>
                    <h3 class="resevation-subtitle">電話番号<span class="mandatory" placeholder="000-0000-0000">※必須</span></h3>
                    <input class="input-form" name="phone-number" type="tel"> 
                    <h3 class="resevation-subtitle">電話番号（緊急連絡先）</h3>
                    <input class="input-form" name="emergency-contact" type="tel">
                    <h3 class="resevation-subtitle">メールアドレス<span class="mandatory">※必須</span></h3>
                    <input class="input-form" name="mail-adress" type="email">

                </div>
                <div class="payment-infomation">
                    <h2 class="reservation-title">お支払い方法の選択</h2>
                    <h3 class="resevation-subtitle"お支払い情報><span class="mandatory">※必須</span></h3>
                    <div class="method-of-payment">
                        <p><input type="radio">現地払い</p>
                        <p><input type="radio">事前払い</p>
                    </div>
                    <p class="resevation-minititle">カード番号</p>
                    <input class="input-form" name="credit-code" type="text">   
                    <p class="resevation-minititle">セキュリティコード</p>
                    <input class="input-form" name="cvv-cvc-code" type="text">
                    <p class="resevation-minititle">有効期限</p>
                    <input class="input-form"　name="expiration-date" type="text" placeholder="MM/YY">
                    <p class="resevation-minititle">支払い回数</p>
                    <input class="input-form"　name="number-of-payment" type="text">
                </div>
                <div class="checkin-infomation">
                    <h2 class="reservation-title">チェックイン・交通手段の選択</h2>
                    <h3 class="resevation-subtitle">チェックイン時間<span class="mandatory">※必須</span></h3>
                    <select class="input-form">
                        <option value="未選択">選択して下さい</option>
                        <?php for($i=15;$i<19;$i++) {
                            echo "<option value='$i'>$i:00</option>";
                        }?>
                    </select>


                    <h3 class="resevation-subtitle">宿泊施設への交通手段<span class="mandatory">※必須</span></h3>
                    <input class="input-form" type="text">
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
            </div>  
                <div class="consent-personal-infomation">
                    <h2 class="reservation-title">個人情報取扱についての同意</h2>
                    <p>入力いただくお客様の個人情報は、、</p>
                    <p>上記にご同意いただける場合は「個人情報の取り扱いについて同意します」にチェックをいれてください。</p>
                    <p><input type="checkbox">個人情報に取り扱いについて同意します</p>
                </div>
                <div class="submit-button-wrapper">
                    <input type="submit" class="submit-button" classvalue="予約・購入情報確認へ進む">          
                </div>
            
        </form>



        </div><!--</main-wrapper>-->
    </div><!--</main>-->
    
    
    
    <script src="./script.js"></script>
</body>



















</html>
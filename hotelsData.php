<?php
require_once('hotelsInfomation.php');

$hotel_kA = new Hotel('箱根旅館A',10000,20000,"./images/hotel_hakoneA.jpg");
$hotel_kB = new Hotel('箱根旅館B',12000,30000,"./images/hotel_hakoneD.jpg");
$hotel_kC = new Hotel('箱根旅館C',15000,45000,"./images/hotel_hakoneF.jpg");
$hotel_kD = new Hotel('箱根旅館D',12000,30000,"./images/hotel_hakoneA.jpg");
$hotel_kE = new Hotel('箱根旅館E',16000,22000,"./images/hotel_hakoneD.jpg");
$hotel_kF = new Hotel('箱根旅館F',18000,50000,"./images/hotel_hakoneF.jpg");

$hotel_hA = new Hotel('北海道旅館A',13000,30000,"./images/hotel_hokkaidoA.jpg");
$hotel_hB = new Hotel('北海道旅館B',9000,20000,"./images/hotel_hokkaidoB.jpg");
$hotel_hC = new Hotel('北海道旅館C',20000,30000,"./images/hotel_hokkaidoD.jpg");
$hotel_hD = new Hotel('北海道旅館D',13000,34000,"./images/hotel_hokkaidoA.jpg");
$hotel_hE = new Hotel('北海道旅館E',9000,20000,"./images/hotel_hokkaidoB.jpg");
$hotel_hF = new Hotel('北海道旅館F',20000,40000,"./images/hotel_hokkaidoD.jpg");



$hotels_k = array($hotel_kA,$hotel_kB,$hotel_kC,$hotel_kD,$hotel_kE,$hotel_kF);
$hotels_h = array($hotel_hA,$hotel_hB,$hotel_hC,$hotel_hD,$hotel_hE,$hotel_hF);
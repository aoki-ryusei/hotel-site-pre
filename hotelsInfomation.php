<?php 
class Hotel {
    private $name;
    private $lowerLimitPrice;
    private $upperLimitPrice;
    Private $image;

    public function __construct($name,$lowerLimitPrice,$upperLimitPrice,$image) {
        $this ->name = $name;
        $this ->lowerLimitPrice =$lowerLimitPrice;
        $this ->upperLimitPrice =$upperLimitPrice;
        $this ->image =$image;
     }

     public function getName() {
        return $this->name;
     }
     public function getLowerLimitPrice() {
        return $this->lowerLimitPrice;
     }
     public function getUpperLimitPrice() {
        return $this->upperLimitPrice;
     }
     public function getImage() {
        return $this->image;
     }

     

}
?>





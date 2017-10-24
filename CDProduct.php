<?php
class CDProduct extends ShopProduct {
    public $type = "CDProduct";
    private $playLength = 0;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength(){
        return $this->playLength;
    }
    public function getSumaryLine(){
        $base = parent::getSummaryLine();
        $base .= ": Время звучания - {$this->playLength} мин.";
        return $base;
    }
}
<?php
class BookProduct extends ShopProduct {
    public $type = "BookProduct";
    private $numPages = 0;

    public function __construct($title, $firstName, $mainName, $price, $numPages){
    parent::__construct($title, $firstName, $mainName, $price);
    $this->numPages = $numPages;
    }

    public function getNumberOfPages(){
        return $this->numPages;
    }

    public function getSumaryLine(){
        $base = parent::getSummaryLine();
        $base.= ":Количество станиц - {$this->numPages} стр.";
        return $base;
    }

    public function getPrice(){
        return ($this->price);
    }




}
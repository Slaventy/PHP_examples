<?php
class ShopProduct implements Chargeble {
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;
    private $id = 0;
    public $type = "ShopProduct";
    const AVAILABLE = 0;
    const OUT_OF_STOCK = 1;

    public function __construct($title, $firstName, $mainName, $price){
        $this->title=$title;
        $this->producerFirstName=$firstName;
        $this->producerMainName=$mainName;
        $this->price=$price;
    }

    public function setId ( $id ){
        $this->id = $id;
    }

    public static function getInstance($id, PDO $pdo){
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
        $result = $stmt->execute(array( $id ));
        $row = $stmt->fetch();
        if (empty($row)){return null;}
        if ($row['type'] === "book") {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['numpages']
            );
        }else if($row['type'] === 'cd'){
            $product = new CDProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['playlength']);
        }else {
            $product = new ShopProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price']);
        }
        $product->setId($row['id']);
        $product->setDiscount($row['discount']);
        return $product;
    }

    public function getProducerFirstName(){
        return $this->producerFirstName;
    }

    public function getProducerMainName(){
        return $this->producerMainName;
    }

    public function setDiscount($num){
        $this->discount = $num;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getTitle(){
        return $this->title;
    }

    function getPrice(){
        return ($this->price - $this->discount);
    }

    function getProducer(){
        return   "{$this->producerFirstName} "
            ."{$this->producerMainName}";
    }

    function getSummaryLine(){
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}
<?php
require "ShopProduct.php";
require "CDProduct.php";
require "BookProduct.php";
require "ShopProductWriter.php";
require "StaticExample.php";
require "XmlProductWriter.php";
require "TextProductWriter.php";
require "UtilityService.php";



$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
$product2 = new CDProduct("Пропавший без вести", "Группа","ДДТ", 10.99, 60.33);
$product3 = new BookProduct("Собачье сердце", "Михаил", "Булгаков", 5.99, 235);

//print "Автор: {$product1->getProducer()}\n";
//print "Исполнитель: {$product2->getSumaryLine()}\n";
//print "Автор: {$product3->getSumaryLine()}\n]";

//$write = new ShopProductWriter();
//$write->addProduct($product1);
//$write->addProduct($product2);
//$write->addProduct($product3);
//$write->write();

//print "Цена: {$product1->getPrice()}\n";

//print StaticExample::$aNum."\n";
//StaticExample::sayHello();
//print $product1->type . "\n";

//НЕПОНЯТНО!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//$dsn = "sqlite://home/sl/PhpStorm/bin/identifier.sqlite";
//$pdo = new PDO($dsn, null, null);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$obj = ShopProduct::getInstance(1,$pdo);

//print ShopProduct::AVAILABLE . "\n";

//$writer = new TextProductWriter();
//$writer->addProduct($product1);
//$writer->addProduct($product2);
//$writer->addProduct($product3);
//$writer->write();

//$p = new ShopProduct();
//print $product1->calculateTax(100)."\n";
//
//$u = new UtilityService();
//print $u->calculateTax(10)."\n";

print $product1->calculateTax(100)."\n";
print $product1->generateId()."\n";


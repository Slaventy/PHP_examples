<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 16.10.17
 * Time: 11:39
 */

class StaticExample{
    static public $aNum = 0;

    static public function sayHello(){
        self::$aNum++;
        print "Привет! (" . self::$aNum .")\n";
    }
}
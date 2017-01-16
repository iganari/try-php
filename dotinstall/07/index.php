<?php
/**
 * Created by PhpStorm.
 * User: igarashi
 * Date: 2017/01/16
 * Time: 11:34
 */

// 文字列について

$name = "iganari";
$s1   = "hello $name! \n hello again!";
$s1_2 = "hello {$name}! \n hello again!";
$s1_3 = "hello ${name}! \n hello again!";
$s2   = 'hello $name! \n hello again!';

var_dump($s1);
var_dump($s1_2);
var_dump($s1_3);
var_dump($s2);

// 文字列の連結

$s = "hello" . " " . "world !" ;
var_dump($s);
<?php
/**
 * Created by PhpStorm.
 * User: igarashi
 * Date: 2017/01/16
 * Time: 15:44
 */

// 09 真偽値について理解しよう

/**
 * falseになる場合
 *
 * 文字列: 空、"0"
 * 数値: 0, 0.0
 * 論理値: false
 * 配列: 要素のの数が0
 * null
 */

$x = 5;

// if ($x) {
if ($x == true){
    echo 'great'; // $ php dotinstall/09/index.php
}

// 三項演算子

$a = $argv[1];
$b = $argv[2];

// $max = ($a > $b) ? $a : $b ; ()の中が真であればaをmaxに代入し、()の中が偽であればbをmaxに代入する


if ($a > $b)
{
    $max = $a;
} else
{
    $max = $b;
}

var_dump($max); // php dotinstall/09/index.php 8 7

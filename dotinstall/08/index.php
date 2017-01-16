<?php
/**
 * Created by PhpStorm.
 * User: igarashi
 * Date: 2017/01/16
 * Time: 11:41
 */

// 08 if文で条件分岐をしてみよう
// 比較演算子 > < >= <= == === != !==
// 論理演算子 and && , or || , !

// $score = 85;
$score = $argv[1] ; // php dotinstall/08/index.php 89

// var_dump($score);

if ($score > 80)
{
    echo "great!";
} elseif ($score > 60)
{
    echo "good!";
} else
{
    echo "so...so...";
}
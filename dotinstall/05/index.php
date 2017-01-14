<?php
/**
 * Created by PhpStorm.
 * User: vpn-igarashi
 * Date: 1/13/17
 * Time: 17:53
 */

/**
 * 定数: 変更されない値につけるラベル
 * define("定数名", "値");
 * 定数名は慣習的にすべて大文字で書く
 */

define("MY_EMAIL", "iganari@hogehoge.com");

// 変数では無いので、$はいらない
echo MY_EMAIL;

// 自動的に定義されている定数もある
var_dump(__LINE__); // このコードの行数
var_dump(__FILE__); // このファイルのファイル名
var_dump(__DIR__); //　このファイルのPATH
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21 0021
 * Time: 20:14
 */
$error_reporting       = E_ALL ^ E_NOTICE;
ini_set('error_reporting', $error_reporting);


include("../../vendor/autoload.php");
include "./Wechat/Wechat.php";
define('APPROOT','../../App/');

//die($_GET["echostr"]);              //这样验证就通过了

//---------------------------------------------------
$weObj = new Wechat([
    'token'=>'3351161315', //填写你设定的key
    'debug'=>true,
    'logpath'   => '../wechat.log',
    'logcallback'=>function ($text){
        @file_put_contents('./log.txt',$text."\n",FILE_APPEND);
    }
]);
//-----------------------------------------------------
//
$weObj->valid();            //校验

$weObj->getRev();           //获取微信服务器发来信息(不返回结果)，被动接口必须调用


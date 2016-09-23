<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21 0021
 * Time: 20:14
 */

include("../../vendor/autoload.php");
include "./Wechat/Wechat.php";
define('APPROOT','../../App/');

//---------------------------------------------------
$weObj = new Wechat([
    'token'=>'3351161315', //填写你设定的key
    'debug'=>true,
    'logcallback'=>function ($text){
        file_put_contents('../log.txt',$text."\n",FILE_APPEND);
    }
]);

//-----------------------------------------------------
$weObj->valid();
$weObj->getRev();   //获取微信服务器发来信息(不返回结果)，被动接口必须调用

$Rev = [
    'RevType'     => $weObj->getRevType(),      //返回接收消息的类型
    'RevFrom'     => $weObj->getRevFrom(),      //返回消息发送者的userid
    'RevTo'       => $weObj->getRevTo(),        //返回消息接收者的id（即公众号id）
    'RevID'       => $weObj->getRevID(),        //返回消息id
    'RevCtime'    => $weObj->getRevCtime(),     //返回消息发送时间
    'RevContent'  => $weObj->getRevContent(),   //返回消息内容正文或语音识别结果（文本型）

    //   'RevData'     => $weObj->getRevData(), //返回微信服务器发来的信息（数组）
    //    'RevPic'      => $weObj->getRevPic(), //返回图片信息（图片型信息） 返回数组{'mediaid'=>'','picurl'=>''}
    //    'RevLink'     => $weObj->getRevLink(), //接收消息链接（链接型信息） 返回数组{'url'=>'','title'=>'','description'=>''}
    //    'RevGeo'      => $weObj->getRevGeo(), //返回地理位置（位置型信息） 返回数组{'x'=>'','y'=>'','scale'=>'','label'=>''}
    //    'RevEventGeo' => $weObj->getRevEventGeo(), //返回事件地理位置（事件型信息） 返回数组{'x'=>'','y'=>'','precision'=>''}
    //    'RevEvent'    => $weObj->getRevEvent(), //返回事件类型（事件型信息） 返回数组{'event'=>'','key'=>''}
    //    'RevScanInfo' => $weObj->getRevScanInfo(), //获取自定义菜单的扫码推事件信息，事件类型为scancode_push或scancode_waitmsg 返回数组array ('ScanType'=>'qrcode','ScanResult'=>'123123')
    //    'RevSendPicsInfo'     => $weObj->getRevSendPicsInfo(), //获取自定义菜单的图片发送事件信息,事件类型为pic_sysphoto或pic_photo_or_album或pic_weixin 数组结构见php文件内方法说明
    //    'RevSendGeoInfo'=> $weObj->getRevSendGeoInfo(), //获取自定义菜单的地理位置选择器事件推送，事件类型为location_select 数组结构见php文件内方法说明
    //    'RevVoice'    => $weObj->getRevVoice(), //返回语音信息（语音型信息） 返回数组{'mediaid'=>'','format'=>''}
    //    'RevVideo'    => $weObj->getRevVideo(), //返回视频信息（视频型信息） 返回数组{'mediaid'=>'','thumbmediaid'=>''}
    //    'RevTicket'   => $weObj->getRevTicket(), //返回接收TICKET（扫描带参数二维码,关注或SCAN事件） 返回二维码的ticket值
    //    'RevSceneId'  => $weObj->getRevSceneId(), //返回二维码的场景值（扫描带参数二维码的关注事件） 返回二维码的参数值
    //    'RevTplMsgID' => $weObj->getRevTplMsgID(), //返回主动推送的消息ID（群发或模板消息事件） 返回MsgID值
    //    'RevStatus'   => $weObj->getRevStatus(), //返回模板消息发送状态（模板消息事件） 返回文本：success(成功)|failed:user block(用户拒绝接收)|failed: system failed(发送失败（非用户拒绝）)
    //    'RevResult'   => $weObj->getRevResult(), //返回群发或模板消息发送结果（群发或模板消息事件） 返回数组，内容依事件类型而不同，参考开发文档中群发、模板消息推送事件
    //    'RevKFCreate' => $weObj->getRevKFCreate(), //返回多客服-接入会话的客服账号（多客服-接入会话事件） 返回文本型
    //    'RevKFClose'  => $weObj->getRevKFClose(), //返回多客服-处理会话的客服账号（多客服-接入会话事件） 返回文本型
    //    'RevKFSwitch' => $weObj->getRevKFSwitch(), //返回多客服-转接会话信息（多客服-转接会话事件） 返回数组 {'FromKfAccount' => '','ToKfAccount' => ''}
    //    'RevCardPass' => $weObj->getRevCardPass(), //返回卡券-审核通过的卡券ID（卡券-卡券审核事件） 返回文本型
    //    'RevCardGet'  => $weObj->getRevCardGet(), //返回卡券-用户领取卡券的相关信息（卡券-领取卡券事件） 返回数组{'CardId' => '','IsGiveByFriend' => '','UserCardCode' => ''}
    //    'RevCardDel'  => $weObj->getRevCardDel(), //返回卡券-用户删除卡券的相关信息（卡券-删除卡券事件） 返回数组{'CardId' => '','UserCardCode' => ''}

];

bus($Rev);


//bus('RevFrom');     //对用户的标识

switch(bus('RevType')) {
    case Wechat::MSGTYPE_TEXT:
        $ar = Md($Rev['RevContent'],[
            'CmdIniMiddleware'      => \Middleware\CmdIniMiddleware::class,         //命令初始化
            'CommonMiddleware'      => \Middleware\CommonMiddleware::class,       //通用解析 [ 主命令解析 ]
            'ViewMiddleware'        => \Middleware\ViewMiddleware::class,       //通用解析 [ 主命令解析 ]
        ]);
        //$ar = print_r(bus(),true);
        //回复
        $weObj->text($ar)->reply();
        break;
    case Wechat::MSGTYPE_EVENT:
        break;
    case Wechat::MSGTYPE_IMAGE:
        $weObj->text('这张图片好漂亮啊')->reply();
        break;
    default:

        $weObj->text("help info")->reply();

}

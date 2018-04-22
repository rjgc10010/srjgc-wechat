<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/21
 * Time: 20:30
 */


include './../src/autoloader.php';
$sRjgcWechat=new \SRjgcWechat\SRjgcWechat();
//$sRjgcWechat->index();


//设置自定义菜单
$menu=array(
    array(
        'name'=>'智能控制',
        'sub_button'=>array(
            array(
                'type'=>'view',
                'name'=>'在线控制',
                'url'=>'http://tx.life365.top/login.aspx?key=getUserinfoposturl  ',
            ),
        )
    ),
    array(
        'name'=>'服务平台',
        'sub_button'=>array(
            array(
                'type'=>'click',
                'name'=>'专属定制智能',
                'key'=>'FWPT_ZSDZZN',
            ),
            array(
                'type'=>'view',
                'name'=>'官方网站',
                'url'=>'http://ts.wboop.com',
            )
        )
    ),
    array(
        'name'=>'帮助中心',
        'sub_button'=>array(
            array(
                'type'=>'view',
                'name'=>'灯光教程',
                'url'=>'http://k.wboop.com',
            ),
            array(
                'type'=>'view',
                'name'=>'空调教程',
                'url'=>'http://k.wboop.com',
            )
        ,
            array(
                'type'=>'view',
                'name'=>'智能教程',
                'url'=>'http://k.wboop.com',
            ),
            array(
                'type'=>'view',
                'name'=>'问题排查',
                'url'=>'http://k.wboop.com',
            ),
            array(
                'type'=>'click',
                'name'=>'联系客服',
                'key'=>'BZZX_LXKG',
            )
        )
    )
);

$res=$sRjgcWechat->menu()->setMenu($menu);
print_r($res);die;



<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-09-02
 * Time: 10:17
 */

namespace Ads\Mclass\Controller\Html;


class Html
{

    use \Ads\Mclass\Traits\Data;
    use \Ads\Mclass\Traits\Arr;
    use \Ads\Mclass\Traits\PostRequest;
    use \Ads\Mclass\Traits\AjaxReturnHtml;
    use \Ads\Mclass\Traits\Strtomap;

    public function __construct()
    {
    }

    public function doIndex()
    {
    }

    public function doEditPost()
    {
        $datada     = req('Post')['mclassdatada'];
        $dataxiao   = req('Post')['mclassdataxiao'];
        $datarela   = req('Post')['mclassdatarela'];

        $datada     = $this->getStr($this->getArr($datada));
        $dataxiao   = $this->getStr($this->getArr($dataxiao));
        $datarela   = $this->getStr($this->getArr($datarela));

        $this->set('movieclassda',$datada);
        $this->set('movieclassxiao',$dataxiao);
        $this->set('movieclassrela',$datarela);


        R('/man/?mclass/html/edit');
    }

    public function doEdit()
    {
        return  server('Smarty')->ads('mclass/html/edit')->fetch('',[
            'datada' => $this->get('movieclassda'),
            'dataxiao' => $this->get('movieclassxiao'),
            'datarela' => $this->get('movieclassrela'),

        ]);
    }

    public function doList()
    {
        //
        $class = $this->get('movieclassxiao');
        $classmapxiao = $this->strtomap($class);
        $class = $this->get('movieclassda');
        $classmapda = $this->strtomap($class);
        $class = $this->get('movieclassrela');
        $classmaprela = $this->strtomap($class);


        return  server('Smarty')->ads('mclass/html/list')->fetch('',[
            'title1' => 'mclass/html/getclassmapxiao',
            'nr1'   => print_r($classmapxiao,true),
            'title2' => 'mclass/html/getclassmapda',
            'nr2'   => print_r($classmapda,true),
            'title3' => 'mclass/html/getclassmaprela',
            'nr3'   => print_r($classmaprela,true),
        ]);

    }

    /**
     * @return array
     * 被调用接口
     */
    public function doGetclassmapxiao()
    {

        $class = $this->get('movieclassxiao');
        $classmap = $this->strtomap($class);

        return $classmap;
    }

    public function doGetclassb()
    {

        $class = $this->get('movieclassda');
        $classmap = $this->strtomap($class);

        return $classmap;
    }



}
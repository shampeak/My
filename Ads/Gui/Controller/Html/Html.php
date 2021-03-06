<?php
namespace Ads\Gui\Controller\Html;

class Html
{
    use \App\Traits\AjaxReturnHtml;

    public function doLoginPost(){

        if(Application('AdminAuth')->auth($_POST['password'])){
            $this->AjaxReturn([
                'code'=>200,
                'url'=>'/man/'
            ]);
        }else{
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'密码错',
            ]);
        }
    }

    public function doLogin2Post(){

        if(Application('AdminAuth')->auth($_POST['password'])){
            $this->AjaxReturn([
                'code'=>200,
                'url'=>'/'
            ]);
        }else{
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'密码错',
            ]);
        }
    }


    public function doLogin2()
    {
        return server('Smarty')->ads('gui/Html/Login2')->display('',[
        ]);
    }


    /**
     * 后台首页
     */
    public function doLogin()
    {
        return server('Smarty')->ads('gui/Html/Login')->display('',[
        ]);
    }

    public function doLogout()
    {
        $url = '/man/login/';
        Application('AdminAuth')->logout($url);
    }


}

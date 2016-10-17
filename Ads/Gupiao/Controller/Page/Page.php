<?php
namespace Ads\Gupiao\Controller\Page;

class Page {

    use \Ads\Traits\AjaxReturnHtml;

    public function __construct(){
        if(!Application('AdminAuth')->isLogin()){
            R('/man/loginuser');
        }
    }

    public function doAddPost()
    {
        $res = req('Post');
        app('db')->autoExecute('gupiao_index',$res,'INSERT');

        R('/addons/?gupiao/page/index');
    }

    public function doAdd()
    {
        server('Smarty')->ads('gupiao/page/add')->display('',[
        ]);
    }

    public function doIndex(){
        $list = app('db')->getall('select * from gupiao_index order by id');
        return server('Smarty')->ads('gupiao/page/index')->display('',[
            'list'=>$list
        ]);
    }

    public function doOpt()
    {
        return server('Smarty')->ads('gupiao/page/opt')->display('',[
        ]);
    }

    public function doCheck()
    {
        $code = req('Get')['code'];
        $row = server('db')->getrow("select * from gupiao_index where code = '$code'");

        //所有非底仓数据
        $list = server('db')->getall("select * from gupiao_opt where code = '$code' and type <>  'ground' order by optId desc limit 30",'optId');
        $ground = server('db')->getall("select * from gupiao_opt where code = '$code' and type = 'ground' order by optId desc limit 30");



        $col = server('db')->getall("select * from gupiao_optgroup where code = '$code' order by id desc limit 30",'id');
        $keylist = [];
        //
        $yingli = 0;
        foreach($col as $key=>$value){

            $group = json_decode($value['group'],true);
            $col[$key]['group'] =$group;

            //计算 操作组的盈利金额
//            D($group);
            $qian = 0;
            foreach($group as $_optid){
                if($list[$_optid]['opt'] == 'B'){
                    $qian -=  $list[$_optid]['num']*$list[$_optid]['price'];
                }else{
                    $qian +=  $list[$_optid]['num']*$list[$_optid]['price'];
                }
            }

            $col[$key]['qian'] =sprintf("%.2f",$qian);
            $yingli += $qian;
            $keylist = array_merge($keylist,json_decode($value['group'],true));
        }

        //===========================================
        //对于 非底仓 非配对的数据进行均价计算
        foreach($list as $key=>$value){
            if (!in_array($key,$keylist)){
                if($list[$key]['opt'] == 'B'){
                    $__num += $list[$key]['num'];
                    $__qian +=  $list[$key]['num']*$list[$key]['price'];
                }else{
                    $__num -= $list[$key]['num'];
                    $__qian -=  $list[$key]['num']*$list[$key]['price'];
                }
                //数量
                //价格
                if($__num){
                    $jiaquanjun = $__qian/$__num;
                }
            }
        }
        //echo $jiaquanjun;
        //===========================================



        $yingli = sprintf("%.2f",$yingli);

        //计算底仓成本
        $money = 0;
        $totlenum = 0;
        foreach($ground as $key=>$value){
            $money += $value['num']*$value['price'];
            $totlenum += $value['num'];
        }

        if($totlenum) {
            $chengben = $money / $totlenum;
            $chengben2 = ($money-$yingli) / $totlenum;

            $chengben = sprintf("%.2f",$chengben);
            $chengben2 = sprintf("%.2f",$chengben2);
            //ok 获得成本
        }
        //D($col);
        //以配ID
        //未配ID

        return server('Smarty')->ads('gupiao/page/check')->display('',[
            'row'   => $row,
            'list'  => $list,
            'ground'=> $ground,
            'col'=> $col,               //操作组
            'chengben'=> $chengben,               //底仓成本
            'chengben2'=> $chengben2,               //底仓成本修正
            'jiaquanjun'=> $jiaquanjun,
            'yingli'=> $yingli,               //操作总盈利
            'keylist'=> $keylist,       //所有已经记录的操作id
        ]);

    }

    public function doDelete()
    {
        $code = req('Get')['code'];
        $id = req('Get')['id'];
        server('db')->query("delete from gupiao_opt where optId = '$id'");
        $url = "/addons/?gupiao/page/code&code=$code";
        $this->AjaxReturn([
            'url'=>$url
        ]);
    }

    public function doCode()
    {
        //显示所有的历史
        $code = req('Get')['code'];
        $row = server('db')->getrow("select * from gupiao_index where code = '$code'");

        $list = server('db')->getall("select * from gupiao_opt where code = '$code' order by optId desc");
//D($list);
        $col = server('db')->getall("select * from gupiao_optgroup where code = '$code'",'id');
        $keylist = [];
        foreach($col as $key=>$value){
            $col[$key]['group'] = json_decode($value['group'],true);
            $keylist = array_merge($keylist,json_decode($value['group'],true));
        }

//        view('',[
//            'row'   => $row,
//            'list'  => $list,
//            'keylist'  => $keylist,
//
//        ]);
        return server('Smarty')->ads('gupiao/page/code')->display('',[
            'row'   => $row,
            'list'  => $list,
            'keylist'  => $keylist,
        ]);

    }

    public function doCheck_ungroup()
    {
        $code = req('Get')['code'];
        $id = req('Get')['id'];
        $res['type'] = '';
        server('db')->query("delete from gupiao_optgroup where id = $id");
        R("/addons/?gupiao/page/check&code=$code");
    }


    public function doCheck_groupPost()
    {
        $res = [
            'group'=>json_encode(req('Post')['optgroup']),
            'code'=>req('Post')['code']
        ];
        if(empty($res['group']))        R("/gupiao/check?code=".req('Post')['code']);

        $res = saddslashes($res);
        server('db')->autoExecute('gupiao_optgroup',$res,'INSERT');
        R("/addons/?gupiao/page/check&code=".req('Post')['code']);
    }

    public function doCheck_unground()
    {
        $code = req('Get')['code'];
        $id = req('Get')['id'];
        $res['type'] = '';
        server('db')->autoExecute('gupiao_opt',$res,'UPDATE',"optId = $id");
        R("/addons/?gupiao/page/check&code=$code");
    }

    public function doCheck_ground()
    {
        $code = req('Get')['code'];
        $id = req('Get')['id'];
        $res['type'] = 'ground';
        server('db')->autoExecute('gupiao_opt',$res,'UPDATE',"optId = $id");
        R("/addons/?gupiao/page/check&code=$code");
    }

    public function doOptPost()
    {
        $res = saddslashes(req('Post'));
        if(empty($res['code']) || empty($res['num']) || empty($res['price']) || empty($res['opt']) ){
            $url = "/gupiao/opt?act=".strtolower($res['opt'])."&code=".$res['code'];
            R($url);
        }
        server('db')->autoExecute('gupiao_opt',$res,'INSERT');
        $url = "/addons/?gupiao/page/opt&act=".strtolower($res['opt'])."&code=".$res['code'];
        R($url);
    }


}

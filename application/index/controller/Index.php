<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $this->assign('name','jay');
        $this->assign('email','jay@163.com');
        $this->assign('type','1');
        $this->assign('aaa','1');
        return $this->fetch();
    }

    public function getCount()
    {
        $debug = app('debug');
        $debug->remark('begin');
        $row = Db::table('bet_record')->count();
        $debug->remark('end');
        $out = ['time' => $debug->getRangeTime('begin', 'end') . 's', 'data' => $row];
        return json($out);
    }
}

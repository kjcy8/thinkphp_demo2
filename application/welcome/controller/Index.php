<?php

namespace app\welcome\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    /**
     * 首页
     *
     * @return \think\Response
     */
    public function home()
    {
        //
        return view();
    }

    /**
     * 帮助
     *
     * @return \think\Response
     */
    public function help()
    {
        //
        return view();
    }

    /**
     * 关于我们
     *
     * @return \think\Response
     */
    public function about(Request $request)
    {
        //
        return view();
    }

}

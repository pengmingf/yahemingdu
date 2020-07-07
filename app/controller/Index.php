<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view('index',['action'=>'index']);
    }

    public function __call($name, $arguments)
    {
        // View::assign('action','$name');
        return view($name,['action'=>$name]);
    }
}

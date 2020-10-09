<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class TestController extends Controller
{
    
    public function run(){
        echo 1;
    }


    public function index(){
        return view();
    }

    public function yoga(){

        return view();
    }
}

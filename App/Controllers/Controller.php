<?php

/*
 *
 * Controller
 *
*/
class Controller{

    public function __construct()
    {

    }
    public function index()
    {
       $data="Lo-Views";
        View('welcome',['data'=>$data]);
    }
    public function test()
    {
        $data=Model::all();
        return View('test',['data'=>$data]);
    }
}
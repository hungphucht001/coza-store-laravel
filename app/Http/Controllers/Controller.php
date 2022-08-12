<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $users;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __contructr(Controller $contr){
        $this->users = $contr;
    }

    public function show ($id){
        return view('user',['user'=>"hello"]);
    }
    public function index (){

    }
}

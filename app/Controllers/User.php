<?php

namespace App\Controllers;
class User extends BaseController
{
    public function __construct(){
        $modelUser=Model('User');

    }
    public function login(){
        return view('/user/login', null);
    }
    public function auth(){
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');
        return view('/user/auth', null);
    }
    public function logout(){
        return view('/user/logout', null);
    }

}
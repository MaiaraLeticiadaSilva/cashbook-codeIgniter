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
        $this->modelUser->Where('email', $email);
        $this->modelUser->Where('password', $password);
        $this->modelUser->find();
        
    }
    public function logout(){
        
    }

}
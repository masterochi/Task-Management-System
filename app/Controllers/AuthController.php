<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('login')
            . view('layout/footer');
    }

    public function profile()
    {
        $data = array();
        $data['name'] = 'MUHAMMAD ASYWAD BIN A MAJID';
        $data['username'] = 'asy';
        $data['email'] = 'muhammadasywad@gmail.com';
        $data['password'] = '08123456789';

        return view('layout/header')
            . view('profile', $data)
            . view('layout/footer');

    }

    public function register()
    {
        return view('layout/header')
            . view('register')
            . view('layout/footer');
    }

    public function home()
    {
        return view('layout/header')
            . view('home')
            . view('layout/footer');
    }

    public function newtask(){
        return view('layout/header1')
            . view('newtask')
            . view('layout/footer');
    }

    public function dashboard(){
        return view('layout/header1')
            . view('dashboard')
            . view('layout/footer');
    }
}
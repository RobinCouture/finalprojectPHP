<?php

use App\Controller;

class UserController extends Controller
{
    public function index()
    {
        $this->render('login');
    }
}
<?php

namespace App\Controllers;

class Pages extends BaseControler
{
    public function index() 
    {
        return view('welcome_messages');
    }
    
    public function view($page = 'home')
    {
        return ;
    }
}
<?php

namespace App\controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('layout/aku');
    }
}

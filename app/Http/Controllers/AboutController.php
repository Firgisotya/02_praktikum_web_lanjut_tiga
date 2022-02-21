<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return redirect()->to('https://www.educastudio.com/about-us');
    }
}

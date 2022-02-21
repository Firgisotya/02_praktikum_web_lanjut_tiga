<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return redirect()->to('https://www.educastudio.com/news');

    }

    public function show($show){
        return redirect()->to('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19'. $show);

    }
}

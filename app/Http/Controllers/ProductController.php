<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marble(){
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function kid(){
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function book(){
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }

    public function song(){
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return redirect()->to('https://www.educastudio.com/program/karir');
    }

    public function magang(){
        return redirect()->to('https://www.educastudio.com/program/magang');
    }

    public function kunjungan(){
        return redirect()->to('https://www.educastudio.com/program/kunjungan-industri');
    }
}

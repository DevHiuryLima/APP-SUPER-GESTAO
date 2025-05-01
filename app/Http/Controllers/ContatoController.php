<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {
        var_dump($_´POST);
        return view('site.contato');
    }
}

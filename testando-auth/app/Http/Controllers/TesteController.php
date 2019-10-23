<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function index(Request $req,$n){
        echo $req->idade;
        return "Hello world, $n";
    }

    public function info(){
        phpinfo();
    }

    public function home(){
        return redirect('/home');
    }

    public function boaTarde($nome='Fulano'){

        return view('/boa-tarde',["nome"=>$nome]);
    }
}

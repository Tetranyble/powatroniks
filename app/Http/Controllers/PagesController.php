<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    //
    public function home(){
        $tasks = [
            'the quick brown fox leap over the lazy dog',
            'i love you tega',
            'the quietness',
            'lorem ipsum'
        ];
        return view('welcome',['tasks'=>$tasks, 'request'=> 'foo bar']);
    }
}

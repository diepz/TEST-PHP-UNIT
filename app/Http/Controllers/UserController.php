<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $name = 'diepz';
        return view('user.create', ['name' => $name]);
    }

    public function add($a, $b)
    {


        return $a + $b;


    }

    public function sub($a, $b)
    {
        return $a - $b;

    }

}

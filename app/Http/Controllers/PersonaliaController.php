<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaliaController extends Controller
{
    public function personalia()
    {
        return view('auth.personalia.personalia');
    }

    public function store(Request $request)
    {
        dd($request ->all);
    }
}

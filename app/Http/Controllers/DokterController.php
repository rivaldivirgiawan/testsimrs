<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();

        return view('/dokter.index', ['users' => $users]);
    }
}

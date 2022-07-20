<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthorController extends Controller
{
    public function index()
    {
        $items = DB::select('SELECT * from authors');
        return view('index', ['authors' => $items]);
    }
}


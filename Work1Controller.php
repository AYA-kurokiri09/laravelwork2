<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;


class Work1Controller extends Controller
{
    public function index () {
        return view('work1.index');
    }

    public function create () {
        return view('work1.create');
    }

    public static function home (Request $createdData) {
        $name = $createdData::all();
        return view('work1.home', compact('name'));
    }
}
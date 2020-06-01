<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use App\Http\Requests\Work1Request;


class Work1Controller extends Controller
{
    public function index () {
        return view('work1.index');
    }

    public function create () {
        return view('work1.create');
    }

    public static function home (Work1Request $request) {
        $validated = $request->validated();
        $name = $request->all();
        return view('work1.home', compact('name'));
    }
}

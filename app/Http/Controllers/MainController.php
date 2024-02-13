<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Treno;

class MainController extends Controller
{
    public function index() {

        $treni = Treno :: all();

        return view('pages.index', compact ('treni'));
    }
}

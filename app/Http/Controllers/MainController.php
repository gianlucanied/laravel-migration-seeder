<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{
    public function index() {

        $trains = Train :: whereDate('orario_partenza', now() -> toDateString()) -> get();

        return view('pages.index', compact ('trains'));
    }
}

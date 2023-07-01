<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoinsController extends Controller
{
    public function index()
    {
        $coins = DB::select('SELECT * FROM coins');
        // dd($coins);
        return $coins;

        // return 'this is index';
    }
}

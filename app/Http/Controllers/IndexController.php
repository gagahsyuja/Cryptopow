<?php

namespace App\Http\Controllers;

use App\Models\Algo;
use App\Models\Coin;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coin = Coin::all();
        $algo = Algo::all();

        return view('index', [
            'coins' => $coin,
            'algos' => $algo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $short)
    {
        $coin = Coin::where('short_name', $short) -> firstOrFail();

        return view('show', [
            "coins" => $coin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public static function aFunction()
    {
        echo "it's working!";
    }
}

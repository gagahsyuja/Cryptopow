<?php

namespace App\Http\Controllers;

use App\Models\Algo;
use App\Models\Coin;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coin = Coin::all();
        $algo = Algo::all();
        $watchlist = Watchlist::where('uname', 'ssa');

        return view('index', [
            'coins' => $coin,
            'watchlist' => $watchlist,
            'algos' => $algo
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function help()
    {
        return view('help');
    }

    public function watchlist()
    {
        $watch = DB::table('watchlists')
                -> leftJoin('coins', 'watchlists.short_name', '=', 'coins.short_name')
                -> where('uname', 'ssa')
                -> get();

        if ($watch -> isEmpty())
        {
            $isExist = false;
        }
        else
        {
            $isExist = true;
        }

        return view('watchlist', [
            'watches' => $watch,
            'exist' => $isExist
        ]);
    }

    public function account()
    {
        return view('account');
    }

    public function login(Request $request)
    {
        // $credentials = $request -> validate ([
        //     'uname' => ['required'],
        //     'passwd' => ['required']
        // ]);

        $credentials = [
            'name' => $request -> uname,
            'password' => $request -> passwd
        ];

        if (Auth::attempt($credentials))
        {
            $request -> session() -> put('uname', $request -> uname);

            return redirect('');
        }

        else
        {
            return 'failed';
        }
    }

    public function logout()
    {
        Session::flush();

        return redirect() -> back();
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
        $coin = $request -> coin;
        $sql = Watchlist::where('uname', 'ssa') -> where('short_name', $coin);

        if ($sql -> exists())
        {
            $sql -> delete();
        }
        
        else
        {
            Watchlist::create([
                'uname' => 'ssa',
                'short_name' => $coin
            ]);
        }

        return redirect() -> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $short)
    {
        $coin = Coin::where('short_name', $short) -> firstOrFail();

        $isExist = Watchlist::where('uname', 'ssa')
                -> where('short_name', $short)
                -> exists();

        $miner = DB::table('coins')
                -> join('miners', 'coins.algo', '=', 'miners.algo')
                -> where('coins.short_name', $short)
                -> get();

        $pool = DB::table('coin_pools')
                -> join('pools', 'coin_pools.pool_short_name', '=', 'pools.short_name')
                -> where('coin_pools.coin_short_name', $short)
                -> get();

        $about = DB::table('coins')
                -> join('algos', 'coins.algo', '=', 'algos.name')
                -> where('coins.short_name', $short)
                -> get()
                -> firstOrFail();

        return view('show', [
            "short" => $short,
            "coins" => $coin,
            "miners" => $miner,
            "pools" => $pool,
            "algo" => $about,
            "exist" => $isExist
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

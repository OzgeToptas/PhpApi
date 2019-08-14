<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coins;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $coins = new Coins();
        $coins ->BITCOIN =$request->input('BITCOIN');
        $coins ->LITECOIN =$request->input('LITECOIN');
        $coins ->ETHERIUM =$request->input('ETHERIUM');
        $coins ->RIPPLE =$request->input('RIPPLE');
        $coins ->BITCOIN_CASH =$request->input('BITCOIN_CASH');

        $coins->save();
        return response()->json($coins);
    }
    public function show()
    {
        $coins = Coins::all();
        return response()->json($coins);
    }

    public function showbyid($id)
    {
        $coins = Coins::find($id);
        return response()->json($coins);
    }

    public function updatebyid(Request $request,$id)
    {
        $coins = Coins::find($id);
        $coins->BITCOIN = $request->input('BITCOIN');
        $coins->LITECOIN = $request->input('LITECOIN');
        $coins->ETHERIUM = $request->input('ETHERIUM');
        $coins->RIPPLE = $request->input('RIPPLE');
        $coins->BITCOIN_CASH = $request->input('BITCOIN_CASH');

        $coins->save();
        return response()->json($coins);
    }

    public function deletebyid(Request $request,$id)
    {
        $coins = Coins::find($id);
        $coins->delete();

        return response()->json($coins);

    }

}

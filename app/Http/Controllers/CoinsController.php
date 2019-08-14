<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coins;

class CoinsController extends Controller
{
    public function index() 
    {
    $coins = Coins::all();
    return view('coinsform',compact('coins'));
    }
}
?>
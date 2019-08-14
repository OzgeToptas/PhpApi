<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    protected $table = 'coins';
    protected $fillable =['BITCOIN','LITECOIN','ETHERIUM','RIPPLE','BITCOIN_CASH'];

    public $timestamps = false;
}

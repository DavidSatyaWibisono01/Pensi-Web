<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillable = [
        'pengunjung_id','pplg','dkv','tjkt','pmn','hotel','mplb','kuliner'
    ];

    public $timestamps = false;
}

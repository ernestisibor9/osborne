<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loser extends Model
{
    use HasFactory;

    protected $table = 'losers';
    protected $guarded = array();

    protected $fillable=[
        'board',
        'security',
        'ref_price',
        'open_price',
        'high_price',
        'low_price',
        'last_price',
        'close_price',
        'change_price',
        'change_percentage',
        'security_name',

    ];
    // protected $casts = [
    //     'ref_price' => 'integer',
    //     'open_price' => 'integer',
    //     'high_price' => 'integer',
    //     'last_price' => 'integer',
    //     'close_price' => 'integer',
    //     'change_price' => 'integer',
      
    // ];


}

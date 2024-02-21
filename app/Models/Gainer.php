<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gainer extends Model
{
    use HasFactory;
    
    protected $table = 'gainers';
    protected $guarded = array();
protected $fillable=[
         

];

    protected $casts = [
        'ref_price' => 'integer',
        'past_close' => 'integer',
        'open' => 'integer',
        'high' => 'integer',
        'low' => 'integer',
        'close' => 'integer',
        'change' => 'integer',
        'change_percentage' => 'integer',
        'volume' => 'integer',
        'value' => 'integer',
       
    ];


}

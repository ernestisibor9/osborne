<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateAction extends Model
{
    use HasFactory;
    
     public $guarded = [];  
     protected $casts = [
        'payment_date'=> 'date',     
        'agm_date'=> 'date',     
        'closure_date'=> 'date',     
    ];  
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}

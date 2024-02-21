<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyReport extends Model
{
    use HasFactory;
    
     public $guarded = [];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}

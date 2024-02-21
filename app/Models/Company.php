<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    public $guarded = [];

    public function companyReport()
    {
        return $this->hasMany(CompanyReport::class);
    }


    
    public function corporateAction()
    {
        return $this->hasMany(CorporateAction::class);
    }

}

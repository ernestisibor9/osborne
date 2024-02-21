<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
       
    ];

    public function maketNews()
    {
        return $this->hasMany(MaketNews::class);
    }
}

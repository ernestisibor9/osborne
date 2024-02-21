<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        // 'designation', 
        // 'bio', 
        // 'image'
       
    ];


    public function team()
    {
        return $this->hasMany(Team::class);
    }
}

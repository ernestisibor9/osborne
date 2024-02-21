<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsbornService extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'service_category_id',
        'image',
    ];

 
    public function osbornCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}

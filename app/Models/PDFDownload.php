<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFDownload extends Model
{
    use HasFactory;


    protected $table = 'p_d_f_downloads';
    protected $guarded = array();

    protected $fillable = [
        'name',
        'description',
        'file',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'middle_name', 
        'sur_name',
        'email', 
        'phone',
        'password',
    
    ];

//     public function adminUser(): HasOne
//     {
//         return $this->hasOne(AdminUser::class, 'admin_user_id', 'users_id');
    
//     }
    

//     public function getFullName()
// {
//     return "{$this->first_name} {$this->last_name}  {$this->sur_name}";
// }

}

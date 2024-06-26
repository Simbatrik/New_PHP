<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signatures extends Model
{
    protected $table = 'signatures'; 

    protected $fillable = [
        'form_id',
        'user_id'
    ];
    
    use HasFactory;

    public function forms()
    {
        return $this->hasMany(Forms::class);
    }

    public function Users()
    {
        return $this->hasMany(Users::class);
    }
}

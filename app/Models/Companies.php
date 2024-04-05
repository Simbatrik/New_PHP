<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name', 
        'password', 
        'user_id'
    ];
    use HasFactory;

    public function companies()
    {
        return $this->hasOne(Companies::class);
    }

    public function users_company()
    {
        return $this->hasMany(Users::class);
    }

    public function forms()
    {
        return $this->hasMany(Forms::class);
    }
}

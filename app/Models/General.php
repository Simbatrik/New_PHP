<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'General'; 

    protected $fillable = [
        'company_id',
        'user_id'
    ];
    use HasFactory;

    public function companies()
    {
       return $this->hasMany(Companies::class);
    }

    public function Users()
    {
        return $this->hasMany(Users::class);
    }
}

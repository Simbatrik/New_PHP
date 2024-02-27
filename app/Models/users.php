<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model 
// implements JWTSubject
{
    protected $fillable = [
        'log_in', 
        'password', 
        'name', 
        'surname',
        'city', 
        'department', 
        'job_title',
        'email',
        'mobile', 
        'company_id'
    ];
    use HasFactory;

    public function Users()
    {
        return $this->hasMany(Users::class);
    }

    public function companies()
    {
       return $this->hasMany(Companies::class);
    }

    public function signatures()
    {
        return $this->hasMany(Signatures::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey(); 
    }

    public function getJWTCustomClaims()
    {
        return []; 
    }
}

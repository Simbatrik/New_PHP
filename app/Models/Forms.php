<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $fillable = [
        'name', 
        'url', 
        'company_id'
    ];
    use HasFactory;

    public function forms()
    {
        return $this->hasMany(Forms::class);
    }

    public function fields()
    {
        return $this->hasMany(Fields::class);
    }
    
    public function answers()
    {
        return $this->hasMany(Answers::class);
    }

    public function signatures()
    {
        return $this->hasMany(Signatures::class);
    }
}

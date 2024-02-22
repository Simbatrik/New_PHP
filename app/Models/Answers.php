<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = [
        'name'
    ];
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }

    public function fields()
    {
        return $this->hasMany(Fields::class);
    }

    public function forms()
    {
        return $this->hasMany(Forms::class);
    }
}

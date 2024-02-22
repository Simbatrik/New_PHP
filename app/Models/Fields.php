<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    protected $fillable = [
        'title_forms', 
        'form_id'
    ];
    use HasFactory;

    public function fields()
    {
        return $this->hasMany(Fields::class);
    }

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }
}

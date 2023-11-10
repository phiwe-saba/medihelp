<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    protected $fillable = ['name', 'postal_code', 'city_id'];

    use HasFactory;

    public function city(){
        return $this->belongsTo(City::class);
    }
}

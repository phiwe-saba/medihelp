<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'suburb_id'];
    
    use HasFactory;

    public function suburb(){
        return $this->belongsTo(Suburb::class);
    }
}

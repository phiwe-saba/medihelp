<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAid extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /*public function medicalPlan(){
        return $this->belongsTo(MedicalPlan::class);
    }*/
}

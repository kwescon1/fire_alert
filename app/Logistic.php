<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    //
    protected $fillable = ['firestationid','water_volume','fire_extinguisher','fire_trucks','number_of_persons'];
}
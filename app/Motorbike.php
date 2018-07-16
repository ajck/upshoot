<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
	// Only allow these fields to be set in the DB:
    protected $fillable = ['brand', 'colour', 'model_year'];

}

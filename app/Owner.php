<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
	// Only allow these fields to be set in the DB:
    protected $fillable = ['name', 'motorbike_id', 'location', 'lat', 'lon'];

	// Get all of the owner's motorbikes: (one to many relationship)
	public function motorbikes()
		{
        return $this->hasMany('App\Motorbike');
		}

}

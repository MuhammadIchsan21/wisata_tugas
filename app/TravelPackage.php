<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about',
        'departure_date', 'duration' ,'type',
        'price','deleted_at','created_at','updated_at'
    ];

    protected $hidden = [

    ];
}

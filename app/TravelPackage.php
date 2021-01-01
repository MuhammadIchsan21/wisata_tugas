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
        'price','lat','long',
        'deleted_at','created_at','updated_at'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
    public function kategories()
    {
        return $this->hasMany(Kategori::class, 'travel_packages_id', 'id');
    }
}

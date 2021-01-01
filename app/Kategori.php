<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $table = 'kategories';
    protected $fillable = [
        'travel_packages_id', 'icon','deleted_at','created_at','updated_at'
    ];

    protected $hidden = [

    ];
    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}

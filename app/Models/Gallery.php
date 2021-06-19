<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_packages_id',
        'image'
    ];

    protected $hidden = [

    ];

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}

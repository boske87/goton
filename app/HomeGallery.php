<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeGallery extends Model
{

    protected $table = 'pocetniGallery';
    protected $fillable = ['name','main_image','order'];
}

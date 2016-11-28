<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMain extends Model
{
    protected $table = 'profesori';
    protected $fillable = ['name','desc','main_image','gallery_id','created_at'];



    public function gallery()
    {
        return $this->hasMany('App\ProfGallery','prof_id','id');
    }
}

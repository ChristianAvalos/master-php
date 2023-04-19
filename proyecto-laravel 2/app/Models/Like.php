<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table='likes';

    //relacion Muchos a One
    public function user(){
        return $this->belongsTo('App\Models\User','users_id');
    }

    //relacion Muchos a One
    public function image(){
        return $this->belongsTo('App\Models\Image','image_id');
    }
}

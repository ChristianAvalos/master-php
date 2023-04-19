<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    //relacion One To may
    public function comments(){
        return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
    }

    //relacion One To Many
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    //relacion Muchos a One
    public function user(){
        return $this->belongsTo('App\Models\User','users_id');
    }
}

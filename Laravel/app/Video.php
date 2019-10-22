<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    //Relacion One To Many
    public function comments(){
        return $this -> hasMany('App\Comment');
    }

    //Relacion de Muchos a Uno

    public function user(){
        return $this -> belongsTo('App\User', 'user_id');
    }
}

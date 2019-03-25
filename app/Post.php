<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        public function getAuthor(){
        return $this->hasOne('App\User', 'id','author')->first();
    }
}

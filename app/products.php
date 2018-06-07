<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    
    public function Cats (){
        return $this->belongsTo('App\Cats', 'cat_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
   public function createOrder(){
       return $user = Auth::user();
   }
}

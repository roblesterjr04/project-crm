<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   public function lead() {
	   return $this->belongsTo(Lead::class);
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
	public function contacts() {
		return $this->hasMany(Contact::class);
	}
}

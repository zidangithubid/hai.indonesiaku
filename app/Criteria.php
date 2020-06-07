<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    public function festival()
    {
        return $this->hasMany(Festival::class);
    }
}

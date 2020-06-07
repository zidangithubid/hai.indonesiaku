<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = "indonesia_cities";

    public function destination()
    {
        return $this->hasMany(Destination::class);
    }

    public function festival()
    {
        return $this->hasMany(Festival::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}

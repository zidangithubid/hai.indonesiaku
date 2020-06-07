<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $table = 'indonesia_provinces';

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

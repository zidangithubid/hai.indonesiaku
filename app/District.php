<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $table = 'indonesia_districts';

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

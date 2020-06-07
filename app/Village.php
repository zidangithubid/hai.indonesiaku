<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public $table = 'indonesia_villages';

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    public $table = 'festivals';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}

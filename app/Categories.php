<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function adverts()
    {
        return $this->hasMany(Adverts::class);
    }
}

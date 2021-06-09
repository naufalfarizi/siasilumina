<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $fillable = ['nama'];

    public function nilais()
    {
        return $this->hasMany(Ekskul::class, 'ekskuls_id');
    }
}

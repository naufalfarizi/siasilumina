<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiEkskul extends Model
{
    protected $fillable = ['users_id', 'ekskuls_id', 'nilai'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class, 'ekskuls_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = ['nama', 'poin'];

    public function nilais()
    {
        return $this->hasMany(NilaiPelajaran::class, 'mata_pelajarans_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiPelajaran extends Model
{
    protected $fillable = ['users_id', 'mata_pelajarans_id', 'nilai'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajarans_id', 'id');
    }
}

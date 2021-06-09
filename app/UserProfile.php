<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['users_id', 'kelas', 'semester', 'tahun_ajaran'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

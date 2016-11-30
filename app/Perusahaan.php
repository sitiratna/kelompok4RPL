<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
     protected $fillable=['nama_perusahaan', 'kontak_perusahaan', 'alamat_perusahaan', 'bidang_jasa', 'nama_manager', 'user_id'];

     public function user()
    {
        return $this->belongsTo('User');
    }
}

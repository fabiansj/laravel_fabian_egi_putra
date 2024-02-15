<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahsakit extends Model
{
    protected $fillable = ['nama_rumahsakit', 'alamat', 'email', 'phone'];
    public function pasien(){
        return $this->hasMany(pasien::class, 'rumah_sakit_id');
    }
}

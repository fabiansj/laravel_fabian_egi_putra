<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $fillable = ['nama_pasien', 'alamat', 'phone', 'rumah_sakit_id'];
    public function rumahsakit()
    {
        return $this->belongsTo(rumahsakit::class, 'rumah_sakit_id');
    }
}

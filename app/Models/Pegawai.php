<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='data_pegawai';
    protected $fillable=[
        'nip',
        'nama_pegawai',
        'departemen_id',
        'email',
        'telepon',
        'gender',
        'status'
    ];

    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }
}

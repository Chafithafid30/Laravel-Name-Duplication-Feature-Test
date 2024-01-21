<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NamaLengkap extends Model
{
    protected $table = 'nama_lengkap';
    protected $fillable = ['nama_lengkap'];

    public function checkNamaLengkap($namaLengkap)
    {
        // Lakukan pengecekan data dalam database
        return $this->where('nama_lengkap', $namaLengkap)->first();
    }
}

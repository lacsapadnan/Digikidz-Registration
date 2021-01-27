<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataMurid extends Model
{
    protected $table = 'data_murids';
    protected $fillable = ['nama_murid', 'nama_ortu', 'kurikulum', 'asal_sekolah', 'alamat', 'email', 'no_telp', 'status'];

    public function kurikulum()
    {
        return $this->belongsToMany(dataKurikulum::class);
    }
}

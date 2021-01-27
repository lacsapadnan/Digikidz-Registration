<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKurikulum extends Model
{
    protected $table = 'data_kurikulums';
    protected $fillable = ['nama_kurikulum'];

    public function murid()
    {
        return $this->belongsToMany(dataMurid::class);
    }
}

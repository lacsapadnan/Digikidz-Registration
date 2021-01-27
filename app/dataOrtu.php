<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataOrtu extends Model
{
    protected $table = 'data_ortus';
    protected $fillable = ['nama_ortu', 'nama_murid', 'alamat', 'email', 'no_telp'];
}

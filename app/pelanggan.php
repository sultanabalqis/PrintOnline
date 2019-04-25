<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $primaryKey = 'id_pel';
    public $incrementing = false;

    protected $fillable = ['id_pel','nama_pel','email_pel','no_telp_pel','jenis_kel_pel','tgl_lahir_pel'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = [
        'nama_mapel',
        'id_jurusan'
    ];
    protected $table = 'mata_pelajaran';

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'id_jurusan');
    }
}

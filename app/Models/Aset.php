<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $guarded;

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }

}

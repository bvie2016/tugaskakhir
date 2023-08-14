<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

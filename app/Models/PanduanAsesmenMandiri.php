<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanduanAsesmenMandiri extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function datasertifikasi()
    {
        return $this->belongsTo(DataSertifikasi::class);
    }
    public function daftarunitkompetensi()
    {
        return $this->hasMany(DaftarUnitKompetensi::class);
    }

}

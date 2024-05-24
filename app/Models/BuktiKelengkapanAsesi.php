<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiKelengkapanAsesi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function buktikelengkapan()
    {
        return $this->hasMany(BuktiKelengkapanPemohon::class);
    }
}

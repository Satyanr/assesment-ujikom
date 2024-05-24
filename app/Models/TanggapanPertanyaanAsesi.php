<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggapanPertanyaanAsesi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pertanyaanpendukungobserv()
    {
        return $this->belongsTo(PertanyaanPendukungObserv::class);
    }

}

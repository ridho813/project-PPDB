<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "Siswa";
    protected $fillable = [
        'user_id',
        'nisn',
        'nama_lengkap',
        'alamat',
        'no_telp',
        'umur',
        'seleksi_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

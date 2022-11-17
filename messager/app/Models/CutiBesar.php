<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiBesar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nip',
        'nama_lengkap',
        'bagian',
        'grade',
        'hak_cuti',
        'mulai_tgl',
        'sampai_tgl',
        'sudah',
        'akan',
        'sisa',
        'no_hp',
        'alamat',
        'ttd_image',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

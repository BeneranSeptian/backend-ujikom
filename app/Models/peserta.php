<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;
    public $table = "peserta";
    public $timestamps = false;
    protected $primaryKey = 'kodePeserta';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable =[
        'kodePeserta',
        'namaPeserta',
        'tglLahir',
        'jenisKelamin',
        'alamat',
        'telepon',
        'email'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    use HasFactory;
    public $table = 'poli';
    public $timestamps=false;
    public $primaryKey ='kodePoli';
    public $incrementing = false;
    protected $keyType='string';

    protected $fillable=[
        'kodePoli',
        'namaPoli'
    ];
}

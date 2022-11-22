<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidan extends Model
{
    use HasFactory;
    public $table = "bidan";
    public $timestamps = false;
    protected $primaryKey = 'kodeBidan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable =[
        'kodeBidan',
        'namaBidan',
        'kodePoli'
    ];
}

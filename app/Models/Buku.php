<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
     public $incrementing = false;
    protected $table = "buku";
    protected $primaryKey = "idbuku";
    protected $keyType = "string";
    protected $fillable = [
        'idbuku',
        'judul',
        'genre',
        'tanggalTerbit',
        'noRak',


    ];
}

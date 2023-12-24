<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = ['Nama', 'Jenis_Kendaraan', 'No_Kendaraan', 'No_Kursi', 'Tujuan', 'Harga_satuan'];   
}

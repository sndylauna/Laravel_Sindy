<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable =['id','barangdua_id','pembeli_id','jumlah','tanggal'];
    public $timestamps = true;
    public function barangdua()
    {
        return $this->belongsTo(Barangdua::class ,'barangdua_id');
    }
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class ,'pembeli_id');
    }
    
}

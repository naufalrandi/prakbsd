<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama', 'harga'];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

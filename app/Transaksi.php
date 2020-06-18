<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_customer', 'id_barang', 'tanggal'];
    
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

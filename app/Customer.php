<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nama', 'alamat'];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

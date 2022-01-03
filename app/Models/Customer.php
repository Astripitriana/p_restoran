<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
//     protected $visible = ['order_id', 'nama', 'no_hp'];
    // //memberikan akses data apa saja yang bisa di isi
    //     protected $fillable = ['order_id', 'nama', 'no_hp'];

//     public $timestamp = true;
    //     // membuat relasi one to many
    //     public function Transaksis()
    //     {
    //         return $this->hasMany('App\Models\Transaksi', 'customer_id');
    //     }
}

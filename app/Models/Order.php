<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

//     protected $visible = ['menu_id', 'customer_id', 'tanggal', 'status', 'jumlah'];
    // //memberikan akses data apa saja yang bisa di isi
    //     protected $fillable = ['menu_id', 'customer_id', 'tanggal', 'status', 'jumlah'];

//     public $timestamp = true;
    //     // membuat relasi one to many
    //     public function customers()
    //     {
    //         return $this->hasMany('App\Models\Customer', 'order_id');
    //     }
    //     public function transaksis()
    //     {
    //         return $this->hasMany('App\Models\Transaksi', 'order_id');
    //     }
}

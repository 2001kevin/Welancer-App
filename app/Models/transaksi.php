<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

        protected $fillable = [
            'nama',
            'user_id',
            'pegawai_id',
            'kategori_id',
            'jumlah_harga',
            'status',
        ];

        
        public function users(){
            return $this->belongsTo(User::class, 'user_id', 'id');
        }


}

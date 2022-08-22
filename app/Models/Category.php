<?php

namespace App\Models;
use App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // dengan relasi kategory dg Postingan One to Many, yaitu satu kategori memiliki beberapa postingan
    // dan nantinya fungsi ini bisa di panggil ke view  
    public function barang(){
        return $this->hasMany(Market::class);
    }
}

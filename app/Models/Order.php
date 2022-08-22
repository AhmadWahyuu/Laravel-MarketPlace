<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Market;
use App\Models\User;
use App\Models\AlamatPengirim;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produk(){
        return $this->belongsTo(Market::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function alamat(){
        return $this->belongsTo(AlamatPengirim::class);
    }
}

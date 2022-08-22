<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class AlamatPengirim extends Model
{
    use HasFactory;

    protected $table = 'alamat_pengirims';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Market extends Model
{
    use HasFactory;
    // atribut yang bisa diedit atau ditambahkan
    // protected $fillable =['judul','author','excrept','body'];
    // atribut yang hanya parameter yang tidak boldeh diubah

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category(){
        // relationship antara produk dan category, dengan relation one to one
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters){
        // pengganti if dengan when dengan callback dengan function
        // simbol ?? untuk mengecek isi form search
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama','like','%'.$search.'%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });


    }
    
    public function scopeSort($query, array $filters){
        $query->when($filters['list'] ?? false, function($query,$list){
            return $query->where('nama','like',$list.'%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }

}

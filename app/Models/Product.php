<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $table = 'products';
      protected $fillable= ['cate_id', 'slug', 'small_description','description','original_price','selling_price','image','qty','tax','status','trending','meta_tittle','meta_description','meta_keywords']; 

   public function products(){
        return $this->belongsTo(Category::class);
    }
}

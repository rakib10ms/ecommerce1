<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

       protected $table = 'categories';

       protected $fillable= ['name', 'slug', 'description','status','popular','image','meta_tittle','meta_description','meta_keywords']; 

      public function products(){
        return $this->hasMany(Product::class);
    }
}

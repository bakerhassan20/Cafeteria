<?php

namespace App\Models;
// use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["name","price","size","quantity"];

    // function category(){
    //     return $this->belongsTo(Category::class);
    // }
}

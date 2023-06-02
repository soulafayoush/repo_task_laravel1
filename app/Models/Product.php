<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'type'];
    protected $table ='products';




    public static function getAllProducts()
    {
        return Product::all();
    }

    public static function addProduct($data)
    {
        return Product::create($data);
    }




}



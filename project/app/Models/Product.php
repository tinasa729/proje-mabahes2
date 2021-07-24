<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title' , 'description' , 'price' , 'inventory' , 'image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}

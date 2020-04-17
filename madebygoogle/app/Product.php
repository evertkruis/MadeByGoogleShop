<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productName', 'description', 'price'];

    public function Category() {
        return $this->belongsToMany(Category::class);
    }

    public function review() {
        return $this->hasMany(Review::class);
    }
}

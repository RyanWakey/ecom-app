<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id'];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
    
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function browsingHistories()
    {
        return $this->hasMany(BrowsingHistory::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}

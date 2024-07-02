<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image_path', 'parent_id'];

    public function products() 
    {
        return $this->hasMany(Product::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    public function getImageUrlAttribute()
    {
        return url('images/' . $this->image_path);
    }

    public function views()
    {
        return $this->hasOne(CategoryView::class);
    }

    public function incrementViews()
    {
        if ($this->views) {
            $this->views->increment('views');
        } else {
            $this->views()->create(['views' => 1]);
        }
    }


}

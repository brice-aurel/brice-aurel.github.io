<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function view_other_products()
    {
        return $this->belongsToMany(Product::class, 'view_other_products', 'product_id', 'view_other_product_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}

<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;	
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];

    public function category() {

    	return $this->belongsTo(Category::class); 
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}

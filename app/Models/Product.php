<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'sub_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function documents()
    {
        return $this->hasMany(ProductFile::class, 'product_id');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Models\Project', 'product_project');
    }

    public function getTakeImageAttribute()
    {
        return "/uploads/" . $this->url;
    }

    public function getFirstImageAttribute()
    {
        if ($this->images()->exists())
            return "/uploads/" .  $this->images->first()->url;
        else
            return emptyImage();
    }

    public function scopeFilter($query, $filters)
    {
        $query->when(
            $filters['title'] ?? false,
            fn ($query, $title) => $query->where('title', 'like', "%$title%")
        );

        $query->when(
            $filters['type'] ?? false,
            fn ($query, $type) => $query->where('type', $type)
        );

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas(
                'category',
                fn ($q) => ($q->where('slug', $category))
            );
        });

        $query->when($filters['subCategory'] ?? false, function ($query, $subCategory) {
            return $query->whereHas(
                'subCategory',
                fn ($q) => ($q->where('slug', $subCategory))
            );
        });
    }

    public function relatedProduct($categoryId, $id)
    {
        return Product::where('category_id', $categoryId)
            ->where('id', '!=', $id)
            ->take(4)->get();
    }
}

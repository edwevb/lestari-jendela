<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $guarded = ['id'];

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->url;
    }
}

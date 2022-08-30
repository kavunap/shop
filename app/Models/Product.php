<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'user_id',
        'size',
        'amount',
        'discount',
        'address',
        'description',
        'available',
        'status',
        'image'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;
    protected $fillable = [
        'gift_category_id',
        'title',
        'image',
        'price',
        'stock',
        'description',
    ];


    public function category()
    {
        return $this->belongsTo(GiftCategory::class, 'gift_category_id');
    }
}

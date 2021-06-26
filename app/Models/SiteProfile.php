<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProfile extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'location',
        'address',
        'mobile',
        'email',
        'facebook',
        'Youtube',
        'Twitter',
        'Instagram',
    ];
}

<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
    ];
}

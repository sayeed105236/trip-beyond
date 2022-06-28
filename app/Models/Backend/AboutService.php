<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutService extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
        'is_service',
    ];
}

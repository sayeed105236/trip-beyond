<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'story',
        'mission',
        'values',
    ];
}

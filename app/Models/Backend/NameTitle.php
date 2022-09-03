<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameTitle extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'abbreviation',
    ];
}

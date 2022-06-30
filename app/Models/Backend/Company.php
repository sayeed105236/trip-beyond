<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
      'logo',
      'user',
      'title',
      'description',
      'username',
      'commission',
      'mobile',
      'email',
      'address',
      'zip',
      'country',
      'is_active',
      'status',
    ];
}

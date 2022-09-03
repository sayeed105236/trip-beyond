<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
      'logo',
      'manager',
      'type',
      'name',
      'address_l1',
      'address_l2',
      'city',
      'zip',
      'country',
      'email',
      'phone_code',
      'phone',
      'preferred_currency',
      'status',
      'does_agree'
    ];
}

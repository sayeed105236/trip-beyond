<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDocumentType extends Model
{
    use HasFactory;
    protected $fillable = [
      'type',
      'detail'
    ];
}

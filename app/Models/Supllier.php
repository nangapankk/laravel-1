<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supllier extends Model
{
    // php artisan make:model Supllier
    use HasFactory;
    protected $table = 'supllier';
    protected $fillable = [
        'name', 'email', 'phone', 'address'
    ];
}

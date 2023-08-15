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


    /**
     * model supllier memiliki banyak product
     *
     * @return void
     */
    public function products(){
        return $this->hasMany(Product::class, 'supllier_id', 'id');
    }
}

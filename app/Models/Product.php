<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillabel = [
        'name' ,'description', 'category', 'buy', 'sell', 'stock', 'supllier_id', 'image_url'
    ];

    public function supplier(){
        return $this->belongsTo(Supllier::class, 'supllier_id', 'id');
    }
}

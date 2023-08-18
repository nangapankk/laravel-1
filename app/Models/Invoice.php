<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'invoice_number', 'invoice_date', 'invoice_total', 'user_id'
    ];

    // invoice_detail adalah nama relasi untuk eloquent
    public function invoice_detail(){
        // invoice_id : ini relasi kolom pada tabel invoice_detail
        // id : primary key dari tabel invoice
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }
}

<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineInvoice extends Model
{
    use HasFactory;
    protected $fillable = ['medicine_name', 'medicine_quantity', 'medicine_price', 'medicine_discount', 'medicine_total'];
}

<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator; 

class MedicineInvoice extends Model
{
    use HasFactory;
    protected $fillable = ['medicine_name', 'medicine_quantity', 'medicine_price', 'medicine_discount', 'medicine_total'];


    public static function boot()
	{
	    parent::boot();
	    static::saving(function ($model) {
	        $model->invoice_no = IdGenerator::generate(['table' => 'medicine_invoices', 'field'=>'invoice_no', 'length' => 17, 'prefix' => 'MED-INVOICE-']);
	    });
	}


}

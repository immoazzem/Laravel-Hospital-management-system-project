<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;  

class Appointment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['app_sl','app_p_id', 'app_p_name', 'app_p_phone', 'app_doc_name', 'app_doc_id', 'app_date', 'app_message', 'app_status'];



    // public function patient()
    // {
    //     return $this->belongsTo("App\Models\backend\OutPatient", "app_p_id");
    // }

    public static function boot()
	{
	    parent::boot();
	    static::saving(function ($model) {
	        $model->app_sl = IdGenerator::generate(['table' => 'appointments', 'field'=>'app_sl', 'length' => 10, 'prefix' => 'APP-']);
	    });
	}
}

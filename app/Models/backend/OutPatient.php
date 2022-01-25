<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OutPatient extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['out_p_name', 'out_p_father_name', 'out_p_gender', 'out_p_age', 'out_p_phone', 'out_p_blood', 'out_p_height', 'out_p_weight', 'out_p_bp', 'out_p_symptoms', 'out_p_address'];


    public static function boot()
	{
	    parent::boot();
	    static::saving(function ($model) {
	        $model->out_p_id = IdGenerator::generate(['table' => 'out_patients', 'field'=>'out_p_id', 'length' => 10, 'prefix' => 'OUT-PAT-']);
	    });
	}

}

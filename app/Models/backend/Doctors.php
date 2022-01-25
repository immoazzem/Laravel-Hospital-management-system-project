<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Doctors extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['doc_name', 'doc_specialist', 'doc_education','doc_gender','doc_blood','doc_phone','doc_address', 'doc_email', 'doc_password', 'doc_img', 'doc_dept_id'];

    public static function boot()
	{
	    parent::boot();
	    static::saving(function ($model) {
	        $model->doc_id = IdGenerator::generate(['table' => 'doctors', 'field'=>'doc_id', 'length' => 10, 'prefix' => 'DOC-']);
	    });
	}









}

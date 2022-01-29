<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = ['blood_bag_name','blood_bag_quantity'];
}

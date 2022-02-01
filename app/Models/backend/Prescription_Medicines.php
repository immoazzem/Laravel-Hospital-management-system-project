<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription_Medicines extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['prescription_id','prescription_medicine_id','prescription_med_dosage', 'prescription_med_frequency','prescription_med_days','prescription_med_ins'];
}

<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonor extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable = ['donor_name','donor_blood','donor_age','donor_sex','donor_last_date','donor_phone','donor_email'];
}

<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
  protected $fillable = ['prescription_code','prescription_p_id','prescription_doc_id', 'prescription_history','prescription_note','prescription_date'];
}

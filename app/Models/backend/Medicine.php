<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable =['name', 'price', 'mg', 'group', 'company'];

   

    public function medicine()
    {
        return $this->belongsTo(Prescription_Medicines::class);
    }

    
}

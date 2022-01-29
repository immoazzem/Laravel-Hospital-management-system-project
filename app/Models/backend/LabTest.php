<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'doc_id', 'lab_department', 'price', 'date_of_test'];
}

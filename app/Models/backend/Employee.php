<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey='id';
  protected $fillable=['emp_role_id','emp_name','emp_phone','emp_address','emp_sex','emp_email','emp_password','emp_joining_date', 'emp_status', 'emp_s_basic'];
}

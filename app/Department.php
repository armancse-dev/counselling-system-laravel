<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table='departments';
    protected $fillable=['id','department_name'];


    public function attendance(){

        return $this->hasOne('App\Attendance');

    }
}

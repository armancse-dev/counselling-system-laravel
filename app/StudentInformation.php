<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    protected $table="student_informations";
    protected $fillable=['id','name','sex','phone','email','last_education','profession','age','division','area','department_id','course_name','how_they_know','counseling_by'];

    public function discussions(){
      return $this->hasMany('App\Discussion')->select('feedback','discussion_summary','updated_at');
    }

}

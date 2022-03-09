<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table="discussions";

    protected $fillable=['id','student_information_id','feedback','discussion_summary','created_at','updated_at'];

    public function student_informations(){
        return $this->belongsTo('App\StudentInformation');
    }
}

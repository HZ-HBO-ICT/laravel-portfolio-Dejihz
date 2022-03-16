<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // public function assignCredits($grade){
    //     if($this->){
    //         $this->passed_at = date('Y/m/d');
    //     }
    // }

    public function grade(){
        return $this->hasMany(Grades::class); //course can have multiple grades Qualile 1 has 3 grades
        //hasOne
        //hasMany
        //belongsTo
        //belongsToMany
        //morphMany
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;

    public function addResult($grade){
        if($this->best_grade < $grade){
            $this->best_grade = $grade;
        }
        if($this->best_grade >= $this->lowest_passing_grade){
            $this->passed_at = date('Y/m/d');
        }
        
        $this->save();
    }
    
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
// return $this->belongsTo(Course::class, 'course_id');
// return $this->hasMany(User::class); -> has many for multiple
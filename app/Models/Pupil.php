<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    public function getClass()
    {
        return $this->belongsTo(StudyClass::class, 'class', 'name');
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class)->orderBy('name');
    }
}

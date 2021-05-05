<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyClass extends Model
{
    public function pupils()
    {
        return $this->hasMany(Pupil::class, 'class', 'name')->orderBy('name');
    }
}

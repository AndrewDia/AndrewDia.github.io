<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    public function pupils()
    {
        return $this->belongsToMany(Pupil::class)
            ->orderByRaw('CHAR_LENGTH(class) DESC')
            ->orderBy('class')
            ->orderBy('name');
    }
}

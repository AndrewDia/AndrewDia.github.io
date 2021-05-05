<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Pupil;
use App\Models\StudyClass;

class PagesController extends Controller {
    public function index() {
        return view('index');
    }
    public function news($newsNum='') {
        return view("news$newsNum");
    }
    public function pupil($id) {
        $pupil = Pupil::find($id);
        return view('pupil', compact('pupil'));
    }
    public function class($class) {
        $list = StudyClass::where('name', $class)->first();
        return view('list', compact('list'));
    }
    public function extracurriculars() {
        $extracurriculars = Extracurricular::get()->sortBy('name');
        return view('extracurriculars', compact('extracurriculars'));
    }
    public function extracurricular($id) {
        $extracurricular = Extracurricular::find($id);
        return view('extracurricular', compact('extracurricular'));
    }
    public function schedule() {
        return view('schedule');
    }
    public function contacts() {
        return view('contacts');
    }
}

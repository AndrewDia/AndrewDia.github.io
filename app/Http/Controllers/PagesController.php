<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function index() {
        return view('index');
    }
    public function news($newsNum='') {
        return view("news$newsNum");
    }
    public function schedule() {
        return view('schedule');
    }
    public function contacts() {
        return view('contacts');
    }
}

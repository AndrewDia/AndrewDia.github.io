<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function submit(ContactRequest $request) {
        return view('contacts');
    }

//    public function submit(Request $request) {
//        $validation = $request->validate([
//            'name' => 'required|min:2|max:50',
//            'email' => 'required|email',
//            'message' => 'required|min:15'
//        ]);
//    }
}

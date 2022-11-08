<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index() {
 
        return view('people-of-interest');
    }

    public function show($personId) {
        $person = Person::find($personId);
        return view('person-of-interest', compact('person'));
    }
}

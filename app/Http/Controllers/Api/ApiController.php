<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class ApiController extends Controller
{
    public function showAll(Request $request ) {
        $status = $request->input('status'); 
        $peopleOfInterest = Person::with('statuses')->orderBy('name')->where('status', '=', $status)->limit(20)->get();
        return $peopleOfInterest;
    }

    public function showOne($id) {
        $personOfInterest = Person::with('image')->find($id);
        return $personOfInterest;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer; // Import the Developer model

class DeveloperController extends Controller
{
    //store method
    public function store(Request $request)
    {
        $developer = new Developer();
        $developer->firstName = $request->firstName;
        $developer->lastName = $request->lastName;
        $developer->email = $request->email;
        $developer->age = $request->age;
        $developer->skillsId = $request->selectedSkill;
        $developer->save();
        return response()->json($developer);
    }
}

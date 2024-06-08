<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;


class SkillController extends Controller
{
    //Index
    public function index()
    {
        $skills = Skill::all();
        
        return response()->json([
            'success' => true,
            'message' => 'List of all skills',
            'data' => $skills
        ], 200);
    }
}

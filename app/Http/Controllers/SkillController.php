<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function create(Request $request)
    {
        $skill = new Skill;
        $skill->skill_name = $request->name;
        $skill->description = $request->description;
        $skill->save();

        return redirect('/');
    }
}

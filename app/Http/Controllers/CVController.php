<?php

namespace App\Http\Controllers;

use App\Models\CodecademyPath;
use App\Models\Experience;
use App\Models\ExperienceEmployer;
use App\Models\TreehouseCourse;
use Illuminate\Http\Request;
use App\Models\Degree;
use App\Models\ZTMCourse;
use App\Models\Skill;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees     = Degree::where('cv_flag', '=', true)->get();
        $employers   = ExperienceEmployer::where('cv_flag', '=', true)->get();
        $experiences = Experience::where('cv_flag', '=', true)->get();
        $codecademy  = CodecademyPath::all();
        $ztmCourses  = ZTMCourse::all();
        $treehouseCourses = TreehouseCourse::all();
        $skills = Skill::all();

        return view('cv.index', compact('degrees', 'experiences', 'employers', 'ztmCourses', 'codecademy', 'treehouseCourses', 'skills'));
    }

    public function summary()
    {
        return view('errors.index');
    }
}

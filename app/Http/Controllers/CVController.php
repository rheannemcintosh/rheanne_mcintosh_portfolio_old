<?php

namespace App\Http\Controllers;

use App\Models\CodecademyPath;
use App\Models\Experience;
use App\Models\ExperienceEmployer;
use Illuminate\Http\Request;
use App\Models\Degree;
use App\Models\ZTMCourse;

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

        return view('cv.index', compact('degrees', 'experiences', 'employers', 'ztmCourses', 'codecademy'));
    }
}

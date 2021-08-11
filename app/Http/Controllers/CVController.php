<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceEmployer;
use Illuminate\Http\Request;
use App\Models\Degree;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers   = ExperienceEmployer::where('cv_flag', '=', true)->get();
        $experiences = Experience::where('cv_flag', '=', true)->get();

        return view('cv.index', compact('experiences', 'employers'));
    }
}

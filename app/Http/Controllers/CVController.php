<?php

namespace App\Http\Controllers;

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
        $degrees = Degree::all();

        return view('cv.index', compact('degrees'));
    }
}

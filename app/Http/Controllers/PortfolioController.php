<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a temporary portfolio page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('errors.oops-github');
    }
}

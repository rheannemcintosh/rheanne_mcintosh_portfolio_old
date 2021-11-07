<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
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
        $portfolio_projects = PortfolioProject::all();
        return view('portfolio.index', compact('portfolio_projects'));
    }
}

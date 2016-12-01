<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Experiences;
use App\Services;
use App\Skills;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $services = Services::where('name', $name)->get();


        // return '';
        return view('portfolio/portfolio');
    }

    public function experiences($name)
    {
        $experiences = Experiences::where('name', $name)->get();
    }

    public function services($name)
    {
        $services = Services::where('name', $name)->get();
    }

    public function skills($name)
    {
        $skills = Skills::where('name', $name)->first();

        return $skills;
    }

    public function products($name)
    {
        $skills = Skills::where('name', $name)->first();

        return view('portfolio/productpage');
    }
}
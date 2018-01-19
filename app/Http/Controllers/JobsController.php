<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Location;
use App\Job;

class JobsController extends Controller
{
    public function create()
    {
    	$services = Service::all(['id','title_long']);
    	$locations = Location::all(['id','name']);

    	return view('job.create', compact('services','locations'));
    }
}

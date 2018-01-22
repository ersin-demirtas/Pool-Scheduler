<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function getServiceCost($id) {
      $service = Service::find($id);

      return $service->cost;
	}    
	public function getServiceCost2(Request $request) {
	    $service = Service::whereIn('id', $request->get('id'))->get();

	    return $service;
	}
}

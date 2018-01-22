<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use App\ClothColor;

class ClothsController extends Controller
{
    public function getTypes() {
      $cloths = Cloth::get();

      return $cloths;
	} 
	public function getColors() {
		$colors = ClothColor::orderBy('name')->get();

		return $colors;
	}
}

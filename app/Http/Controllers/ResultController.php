<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class ResultController extends BaseController
{
  public function show($gender, $property)
  {
    if($gender == 'girl') {
      return view('result')->with('type', 'girl');
    } else {
      return view('result')->with('type', 'boy');
    }
  }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class ResultController extends BaseController
{
  public function show($gender, $property)
  {
    // todo create database
    // get actual values depending on values
    if($gender == 'girl') {
      $names = array("Value" => "Kylie", "Amanda", "Katherine");

    } else {
      $names = array("James", "Mark", "Matthew");
    }

    return view('result')->with('type', $gender)->with('names', $names);

  }
}

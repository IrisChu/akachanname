<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ResultController extends BaseController
{
  public function show($gender, $property)
  {
    $name = DB::table('names')
                ->join('characteristic_name', 'names.id', '=', 'characteristic_name.name_id')
                ->join('characteristics', 'characteristics.id', '=', 'characteristic_name.characteristic_id')
                ->select('names.name', 'names.pronunciation')
                ->where('names.gender', $gender)
                ->where('characteristics.characteristic', $property)
                ->inRandomOrder()
                ->first();

    return view('result')->with('type', $gender)->with('name', $name);
  }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class LoadDataController extends BaseController
{
  public function load()
  {
    $fileName = "/name_data.csv";
    $row = 0;
    if (($handle = fopen(public_path () . $fileName, 'r')) !== FALSE) {
      DB::table('names')->delete();
      DB::table('characteristic_name')->delete();

  		while (($line = fgetcsv($handle, 1000, ',' )) !== FALSE) {
          $row++;
          if($row == 1) {
            continue;
          }
          $gender = $line[0];
          $pronunciation = $line[1];
          $name = $line[2];
          $characteristics = $line[4];
        // skip for now
        //  $meaning = $line[5];
          $famousPerson = $line[6];

          if(!isset($name) || empty($name)) {
            continue;
          }

          $nameID = DB::table('names')->insertGetId(
              ['name' => $name,
              'pronunciation' => $pronunciation,
              'gender' => $gender,
              'created_at' => NOW(),
              'updated_at' => NOW()
            ]
          );

          $characteristics = explode(",", str_replace(' ', '', $characteristics));

          foreach ($characteristics as $characteristic) {
            $characteristicID = DB::table('characteristics')->where('characteristic', $characteristic)->value('id');

            if(!isset($characteristicID) || empty($characteristicID)) {
              continue;
            }

            $characteristicNameID = DB::table('characteristic_name')->insertGetId(
                ['characteristic_id' => $characteristicID,
                'name_id' => $nameID,
                'created_at' => NOW(),
                'updated_at' => NOW()
              ]
            );
          }

  		}
  		fclose ( $handle );
      echo 'done';
  	}
  }
}

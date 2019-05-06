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
    if (($handle = fopen ( public_path () . $fileName, 'r' )) !== FALSE) {
  		while ( ($line = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
          $row++;
          if($row == 1) {
            continue;
          }
          $gender = $line[0];
          $pronunciation = $line[1];
          $name = $line[2];
          $characteristic = $line[3];
        // skip for now
        //  $meaning = $line[4];
          $famousPerson = $line[5];

          $SQL = "SELECT * FROM names where name = '$name' limit 1";
          $existingName = DB::select($SQL);

           if($existingName) {
            // $SQL = "UPDATE names SET pronunciation = $pronunciation, gender = $gender, updated_at = NOW()) WHERE id = $nameID";
            // mysqli_query($con, $SQL);
            //
            // $SQL = "UPDATE characteristic_name SET characteristic_id = (SELECT id FROM characteristics WHERE characteristic = $characteristic) WHERE name_id = $nameID";
            // mysqli_query($con, $SQL);
          } else {
            $SQL = "INSERT INTO names (name, pronunciation, gender, created_at, updated_at) VALUES('$name', '$pronunciation', '$gender', NOW(), NOW())";
            $result = DB::insert($SQL);
            // DB::insert($SQL);\

            // $SQL = "INSERT INTO characteristic_name (characteristic_id, name_id, created_at, updated_at) VALUES( (SELECT id FROM characteristics WHERE characteristic = $characteristic), $nameID, NOW(), NOW())"
            // DB::insert($SQL);
          }
  		}
  		fclose ( $handle );
  	}
  }
}

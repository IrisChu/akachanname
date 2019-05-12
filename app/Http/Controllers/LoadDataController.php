<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class LoadDataController extends BaseController
{
  public function load()
  {
    Schema::dropIfExists('names');
    Schema::dropIfExists('characteristics');
    Schema::dropIfExists('characteristic_name');

    Schema::create('names', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('pronunciation')->nullable;
        $table->enum('gender', array('unisex','girl','boy'));
        $table->timestamps();
    });

    Schema::create('characteristics', function (Blueprint $table) {
        $table->increments('id');
        $table->string('characteristic');
        $table->timestamps();
    });

    Schema::create('characteristic_name', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('characteristic_id');
        $table->integer('name_id');
        $table->timestamps();
    });

    DB::table('characteristics')->insert([
        ['characteristic' => 'smart', 'created_at' => NOW(), 'updated_at' => NOW()],
        ['characteristic' => 'genki', 'created_at' => NOW(), 'updated_at' => NOW()],
        ['characteristic' => 'respect', 'created_at' => NOW(), 'updated_at' => NOW()],
        ['characteristic' => 'reliable', 'created_at' => NOW(), 'updated_at' => NOW()],
        ['characteristic' => 'kind', 'created_at' => NOW(), 'updated_at' => NOW()],
        ['characteristic' => 'beauty', 'created_at' => NOW(), 'updated_at' => NOW()]
    ]);

    $this->importCSV();
  }

  private function importCSV() {
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

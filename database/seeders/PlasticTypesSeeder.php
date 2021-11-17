<?php

namespace Database\Seeders;

use App\Models\Plastic_type;
use Illuminate\Database\Seeder;

class PlasticTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'plastic_types';
        $file = public_path("/seeders/$table" . ".csv");

        $content = $this->import_csv($file);

        foreach ($content as $type){
            Plastic_type::create([
                'type' => $type['type'],
                'recycle_grade' => $type['recycle_grade'],
                'recycle_data' => $type['recycle_data'],
                'acronym' => $type['acronym']
            ]);
        // $type->timestamps = false;
        }
    }

    //Import plastic types CSV
    public function import_csv($filepath, $delimeter = ','){
        //Check that file is readable
        if(!file_exists($filepath) || !is_readable($filepath)){
            return false;
        } else{
            $header = null;
            $data = [];

            //Open the file
            if($handle = fopen($filepath, 'r')){
                //Read the table (while)
                while($row = fgetcsv($handle, 1000, $delimeter)){
                    if(!$header){
                        $header = $row;
                    } else{
                        $data[] = array_combine($header, $row);
                    }
                }
                fclose($handle);
                return $data;
            } else{
                return false;
            }
            
        }
        
    }
}

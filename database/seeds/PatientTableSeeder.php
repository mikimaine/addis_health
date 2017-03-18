<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class HistoryTypeTableSeeder.
 */
class PatientTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('history_types');


        $patient = array();
        $gender = array('Male', 'Female');


        for ($i =0 ; $i <=1000; $i++){
            $types = [
                'temp'         => 1,
                'hb'            =>  rand(0,100),
                'bp'            => rand(60,180),
                'gender'        => $gender[rand(0, 1)],
                'weight'        =>rand(40, 85),
                'height'        => rand(150, 185),
                'age'           => rand(15, 65),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),

             ];
            array_push($patient,$types);
        }



        DB::table('patient')->insert($patient);

        $this->enableForeignKeys();
    }
}

<?php

namespace App\Repositories\Patient;

use App\Models\Patient\Patient;
use App\Repositories\BaseRepository;
use Faker\Factory;

/**
 * ETM SOFTWARE PLC
 * Created For UNHCR with LARAVEL FRAMEWORK.
 * Author: Miki Maine Amdu @MIKI_MAINE_AMDU
 * Date: 3/18/17
 * Time: 3:50 PM
 */
class EloquentPatientRepository extends BaseRepository implements PatientContract
{
    /**
     * Model class Name Space of the corresponding to this repository
     * @var string
     */
    protected $modelName = 'App\Models\Patient\Patient';

    /**
     * Associated Repository Model.
     */
    const MODEL = Patient::class;


    /**
     * @param $input
     * @return mixed
     */
    public function createStub($input)
    {


        $gender = array('Male', 'Female');

        $patient = new $this->modelName();

        $patient->temp   = $input['temp'];
        $patient->hb     = $input['hb'];
        $patient->bp     = $input['bp'];
        $patient->gender = $gender[rand(0, 1)];
        $patient->weight = rand(40, 85);
        $patient->height = rand(150, 185);
        $patient->age    = rand(15, 65);


        return $patient;
    }
}
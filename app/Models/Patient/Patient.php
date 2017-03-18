<?php

namespace App\Models\Patient;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{


    /** The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patient';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [ 'temp','hb','bp','gender','weight','height','age'];

    /**
     * @var array
     */
//    protected $dates = ['deleted_at'];






}

<?php

namespace App\Models\Newsletter;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{


    /** The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news_letter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [ 'email'];

    /**
     * @var array
     */
//    protected $dates = ['deleted_at'];






}

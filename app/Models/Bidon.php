<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bidon
 * @package App\Models
 * @version March 19, 2020, 7:15 am UTC
 *
 * @property string subject
 * @property string number
 * @property integer user_id
 * @property string file_name
 * @property string label
 * @property boolean improvable
 */
class Bidon extends Model
{
    use SoftDeletes;

    public $table = 'bidons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'subject',
        'number',
        'user_id',
        'file_name',
        'label',
        'improvable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subject' => 'string',
        'number' => 'string',
        'user_id' => 'integer',
        'file_name' => 'string',
        'label' => 'string',
        'improvable' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject' => 'required',
        'user_id' => 'required',
        'label' => 'required',
        'improvable' => 'required'
    ];

    
}

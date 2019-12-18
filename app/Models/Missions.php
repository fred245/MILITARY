<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Missions
 * @package App\Models
 * @version December 14, 2019, 11:22 am UTC
 *
 * @property string name
 * @property string place
 * @property string start_date
 * @property string end_date
 * @property integer priority_id
 * @property integer objective_id
 * @property string description
 */
class Missions extends Model
{

    public $table = 'missions';
    



    public $fillable = [
        'name',
        'place',
        'start_date',
        'end_date',
        'priority_id',
        'objective_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'place' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'priority_id' => 'integer',
        'objective_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'place' => 'required',
        'end_date' => 'required',
        'description' => 'required|min:10'
    ];

    
}

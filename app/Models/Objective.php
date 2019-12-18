<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Objective
 * @package App\Models
 * @version December 8, 2019, 6:26 pm UTC
 *
 * @property string name
 * @property integer completed
 * @property string description
 */
class Objective extends Model
{

    public $table = 'objectives';
    



    public $fillable = [
        'name',
        'completed',
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
        'completed' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'completed' => 'required',
        'description' => 'required|min:5'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Soldier
 * @package App\Models
 * @version December 7, 2019, 12:09 am UTC
 *
 * @property string name
 * @property string email
 * @property string birthday
 * @property integer phone
 * @property integer department_id
 * @property integer grade_id
 */
class Soldier extends Model
{

    public $table = 'soldiers';




    public $fillable = [
        'name',
        'email',
        'birthday',
        'phone',
        'department_id',
        'grade_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'birthday' => 'date',
        'phone' => 'integer',
        'department_id' => 'integer',
        'grade_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'birthday' => 'required',
        'phone' => 'required|min:5'
    ];

  


}

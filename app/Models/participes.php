<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class participes
 * @package App\Models
 * @version December 14, 2019, 9:47 pm UTC
 *
 * @property integer soldiers_id
 * @property integer mission_id
 */
class participes extends Model
{

    public $table = 'participes';
    



    public $fillable = [
        'soldiers_id',
        'mission_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'soldiers_id' => 'integer',
        'mission_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

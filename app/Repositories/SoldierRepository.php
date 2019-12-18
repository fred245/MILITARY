<?php

namespace App\Repositories;

use App\Models\Soldier;
use App\Repositories\BaseRepository;

/**
 * Class SoldierRepository
 * @package App\Repositories
 * @version December 7, 2019, 12:09 am UTC
*/

class SoldierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'birthday',
        'phone',
        'department_id',
        'grade_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Soldier::class;
    }
}

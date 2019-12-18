<?php

namespace App\Repositories;

use App\Models\Missions;
use App\Repositories\BaseRepository;

/**
 * Class MissionsRepository
 * @package App\Repositories
 * @version December 14, 2019, 11:22 am UTC
*/

class MissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'place',
        'start_date',
        'end_date',
        'priority_id',
        'objective_id',
        'description'
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
        return Missions::class;
    }
}

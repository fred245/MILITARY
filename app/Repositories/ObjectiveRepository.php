<?php

namespace App\Repositories;

use App\Models\Objective;
use App\Repositories\BaseRepository;

/**
 * Class ObjectiveRepository
 * @package App\Repositories
 * @version December 8, 2019, 6:26 pm UTC
*/

class ObjectiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'completed',
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
        return Objective::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Priority;
use App\Repositories\BaseRepository;

/**
 * Class PriorityRepository
 * @package App\Repositories
 * @version December 6, 2019, 8:58 pm UTC
*/

class PriorityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
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
        return Priority::class;
    }
}

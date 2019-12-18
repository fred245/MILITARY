<?php

namespace App\Repositories;

use App\Models\participes;
use App\Repositories\BaseRepository;

/**
 * Class participesRepository
 * @package App\Repositories
 * @version December 14, 2019, 9:47 pm UTC
*/

class participesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'soldiers_id',
        'mission_id'
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
        return participes::class;
    }
}

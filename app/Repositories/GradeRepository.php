<?php

namespace App\Repositories;

use App\Models\Grade;
use App\Repositories\BaseRepository;

/**
 * Class GradeRepository
 * @package App\Repositories
 * @version December 6, 2019, 8:50 pm UTC
*/

class GradeRepository extends BaseRepository
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
        return Grade::class;
    }
}

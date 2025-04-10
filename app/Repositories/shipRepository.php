<?php

namespace App\Repositories;

use App\Models\ship;
use App\Repositories\BaseRepository;

/**
 * Class shipRepository
 * @package App\Repositories
 * @version April 10, 2025, 1:49 pm UTC
*/

class shipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ship_name',
        'capacity'
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
        return ship::class;
    }
}

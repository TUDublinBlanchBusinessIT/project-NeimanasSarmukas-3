<?php

namespace App\Repositories;

use App\Models\cruise;
use App\Repositories\BaseRepository;

/**
 * Class cruiseRepository
 * @package App\Repositories
 * @version April 10, 2025, 1:49 pm UTC
*/

class cruiseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ship_id',
        'dep_date',
        'return_date',
        'cruise_origin',
        'cruise_destination'
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
        return cruise::class;
    }
}

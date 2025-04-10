<?php

namespace App\Repositories;

use App\Models\Passenger;
use App\Repositories\BaseRepository;

/**
 * Class PassengerRepository
 * @package App\Repositories
 * @version April 10, 2025, 1:51 pm UTC
*/

class PassengerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pass_name',
        'pass_email',
        'pass_cabin',
        'cruise_id'
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
        return Passenger::class;
    }
}

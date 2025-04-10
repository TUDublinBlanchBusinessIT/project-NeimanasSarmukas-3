<?php

namespace App\Repositories;

use App\Models\port;
use App\Repositories\BaseRepository;

/**
 * Class portRepository
 * @package App\Repositories
 * @version April 10, 2025, 1:49 pm UTC
*/

class portRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'port_name',
        'port_country'
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
        return port::class;
    }
}

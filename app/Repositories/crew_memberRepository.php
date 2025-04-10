<?php

namespace App\Repositories;

use App\Models\crew_member;
use App\Repositories\BaseRepository;

/**
 * Class crew_memberRepository
 * @package App\Repositories
 * @version April 10, 2025, 1:49 pm UTC
*/

class crew_memberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'crew_name',
        'crew_role',
        'ship_id'
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
        return crew_member::class;
    }
}

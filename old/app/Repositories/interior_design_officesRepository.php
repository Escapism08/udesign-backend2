<?php

namespace App\Repositories;

use App\Models\interior_design_offices;
use InfyOm\Generator\Common\BaseRepository;

class interior_design_officesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'office_name',
        'office_location',
        'office_number',
        'office_services',
        'office_description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return interior_design_offices::class;
    }
}

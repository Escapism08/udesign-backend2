<?php

namespace App\Repositories;

use App\Models\advertisment;
use InfyOm\Generator\Common\BaseRepository;

class advertismentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ad_image',
        'ad_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return advertisment::class;
    }
}

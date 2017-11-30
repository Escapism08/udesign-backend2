<?php

namespace App\Repositories;

use App\Models\vendors;
use InfyOm\Generator\Common\BaseRepository;

class vendorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vendor_total_sales'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vendors::class;
    }
}

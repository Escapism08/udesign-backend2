<?php

namespace App\Repositories;

use App\Models\vendor_guy;
use InfyOm\Generator\Common\BaseRepository;

class vendor_guyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vendor_name',
        'vendor_brand',
        'vendor_password',
        'vendor_sales'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vendor_guy::class;
    }
}

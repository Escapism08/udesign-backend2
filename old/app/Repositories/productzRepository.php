<?php

namespace App\Repositories;

use App\Models\productz;
use InfyOm\Generator\Common\BaseRepository;

class productzRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'product_type',
        'product_brand',
        'product_category',
        'product_image',
        'product_image2',
        'product_price',
        'product_old_price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productz::class;
    }
}

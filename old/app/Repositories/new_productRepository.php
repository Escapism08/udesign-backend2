<?php

namespace App\Repositories;

use App\Models\new_product;
use InfyOm\Generator\Common\BaseRepository;

class new_productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'product_brand',
        'product_image',
        'product_category',
        'product_image_2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return new_product::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\product;
use InfyOm\Generator\Common\BaseRepository;

class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'product_price',
        'category_id',
        'brand_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}

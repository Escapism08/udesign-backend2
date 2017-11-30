<?php

namespace App\Repositories;

use App\Models\packages;
use InfyOm\Generator\Common\BaseRepository;

class packagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'package_name',
        'package_category',
        'package_description',
        'package_offer',
        'package_items_from_existing_products',
        'package_featured_images',
        'package_image1',
        'package_image2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return packages::class;
    }
}

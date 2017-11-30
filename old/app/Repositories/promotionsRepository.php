<?php

namespace App\Repositories;

use App\Models\promotions;
use InfyOm\Generator\Common\BaseRepository;

class promotionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'promotions_type',
        'promotion_code',
        'promotion_name',
        'promotion_start_date',
        'promotion_end_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return promotions::class;
    }
}

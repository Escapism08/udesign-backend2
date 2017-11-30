<?php

namespace App\Repositories;

use App\Models\users_table;
use InfyOm\Generator\Common\BaseRepository;

class users_tableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_name',
        'user_password',
        'user_image',
        'user_subscription_type',
        'user_age'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users_table::class;
    }
}

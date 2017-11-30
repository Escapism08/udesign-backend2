<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_title',
        'post_body',
        'post_user_id',
        'post_image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}

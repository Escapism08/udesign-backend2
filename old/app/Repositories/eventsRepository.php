<?php

namespace App\Repositories;

use App\Models\events;
use InfyOm\Generator\Common\BaseRepository;

class eventsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'event_name',
        'event_start_of_date',
        'event_end_date',
        'event_belongs_to_what_brand',
        'event_place',
        'event_owner'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return events::class;
    }
}

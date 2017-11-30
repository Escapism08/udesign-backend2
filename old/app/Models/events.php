<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class events
 * @package App\Models
 * @version November 18, 2017, 5:05 am UTC
 */
class events extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'event_name',
        'event_start_of_date',
        'event_end_date',
        'event_belongs_to_what_brand',
        'event_place',
        'event_owner'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'event_name' => 'string',
        'event_start_of_date' => 'string',
        'event_end_date' => 'string',
        'event_belongs_to_what_brand' => 'string',
        'event_place' => 'string',
        'event_owner' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

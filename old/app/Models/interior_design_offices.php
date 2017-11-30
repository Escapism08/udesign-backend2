<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class interior_design_offices
 * @package App\Models
 * @version November 18, 2017, 5:18 am UTC
 */
class interior_design_offices extends Model
{
    use SoftDeletes;

    public $table = 'interior_design_offices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'office_name',
        'office_location',
        'office_number',
        'office_services',
        'office_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'office_name' => 'string',
        'office_location' => 'string',
        'office_number' => 'string',
        'office_services' => 'string',
        'office_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

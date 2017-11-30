<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class advertisment
 * @package App\Models
 * @version November 18, 2017, 4:56 am UTC
 */
class advertisment extends Model
{
    use SoftDeletes;

    public $table = 'advertisments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ad_image',
        'ad_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ad_image' => 'string',
        'ad_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

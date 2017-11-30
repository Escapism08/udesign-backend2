<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class promotions
 * @package App\Models
 * @version November 18, 2017, 5:01 am UTC
 */
class promotions extends Model
{
    use SoftDeletes;

    public $table = 'promotions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'promotions_type',
        'promotion_code',
        'promotion_name',
        'promotion_start_date',
        'promotion_end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'promotions_type' => 'string',
        'promotion_code' => 'string',
        'promotion_name' => 'string',
        'promotion_start_date' => 'string',
        'promotion_end_date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

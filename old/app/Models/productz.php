<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productz
 * @package App\Models
 * @version November 18, 2017, 3:23 pm UTC
 */
class productz extends Model
{
    use SoftDeletes;

    public $table = 'productzs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'product_type',
        'product_brand',
        'product_category',
        'product_image',
        'product_image2',
        'product_price',
        'product_old_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_type' => 'string',
        'product_brand' => 'string',
        'product_category' => 'string',
        'product_image' => 'string',
        'product_image2' => 'string',
        'product_price' => 'integer',
        'product_old_price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

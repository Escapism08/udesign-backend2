<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class new_product
 * @package App\Models
 * @version November 18, 2017, 3:19 pm UTC
 */
class new_product extends Model
{
    use SoftDeletes;

    public $table = 'new_products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'product_brand',
        'product_image',
        'product_category',
        'product_image_2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_brand' => 'string',
        'product_image' => 'string',
        'product_category' => 'string',
        'product_image_2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

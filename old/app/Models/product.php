<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class product
 * @package App\Models
 * @version November 17, 2017, 10:07 pm UTC
 */
class product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'product_price',
        'category_id',
        'brand_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_price' => 'integer',
        'category_id' => 'integer',
        'brand_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'product_price' => 'required',
        'category_id' => 'min:1',
        'brand_id' => 'min:1'
    ];

    
}

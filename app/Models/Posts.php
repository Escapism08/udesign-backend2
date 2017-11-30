<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Posts extends Model
{
    
	public $table = "posts";
    

	public $fillable = [
	    "name",
		"body",
		"image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"body" => "string",
		"image" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"body" => "required",
		"image" => "required"
	];

}

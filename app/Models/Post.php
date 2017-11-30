<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Post extends Model
{
    
	public $table = "posts";
    

	public $fillable = [
	    "post_title",
		"post_body",
		"post_image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "post_title" => "string",
		"post_body" => "string",
		"post_image" => "string"
    ];

	public static $rules = [
	    "post_title" => "required",
		"post_body" => "required"
	];

}

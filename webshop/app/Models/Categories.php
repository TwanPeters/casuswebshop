<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Categories extends Model
{
    
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];  
    // protected $fillable = [];   
    // protected $hidden = [];     
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
   
   
    public function setImageAttribute($value)
    {
        $attribute_name = "ImgURL";
        $disk = "public";
        $destination_path = "/categories";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */



    public function category()
    {
        return $this->hasMany(Products::class);
    }
}
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */


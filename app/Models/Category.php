<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    // use HasFactory;
    use SoftDeletes;
        protected $fillable = [
        'user_id',
        'cateory_name',
 
    ];

    public function userget()
    { 
    	                //User modal cat id or user id
    	return $this->hasOne(User::class,'id','user_id');
    }

}

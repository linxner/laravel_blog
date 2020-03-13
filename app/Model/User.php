<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','name','age','email','avatar'];
}

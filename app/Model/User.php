<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
public $fillable=['fullname','email','username','password'];
public $timestamps = false;
}

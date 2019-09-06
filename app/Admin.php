<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
use AuthenticableTrait;

    public $timestamps=false;

    protected $guard="admin";

    public $fillable= ['name','email','password','job_title'];

    protected $hidden=['passwprds','remember_token'];
}

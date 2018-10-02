<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'domain', 'bd_database', 'bd_hostname', 'bd_username', 'bd_password'];
}

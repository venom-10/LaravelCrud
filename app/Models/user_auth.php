<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_auth extends Model
{
    use HasFactory;
    protected $table = 'user_auth';
    protected $fillable = ['name', 'email', 'password'];
}

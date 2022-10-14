<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guard = "admin";

    protected $table = "admins";
    protected $fillable = [
        'username',
        'nama_lengkap',
        'email',
        'password',
        'role_as'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordUpdateHistory extends Model
{
    use HasFactory;

    protected $table  = 'password_update_histories';
    protected $fillable  = ['customer_id','password_update_date','last_password'];
}

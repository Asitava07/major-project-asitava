<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'username', 'password', 'phoneno', 'DOB'];

    public function courses()
    {
        return $this->hasMany(course::class);
    }
}

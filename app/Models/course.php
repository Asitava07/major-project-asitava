<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    // public function userCourses()
    // {
    //     return $this->hasMany(usercourse::class, 'courseid');
    // }

    public function Userinfo()
    {
        return $this->belongsTo(Userinfo::class);
    }
}

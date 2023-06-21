<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercourse extends Model
{
    use HasFactory;
    protected $table = 'usercourses';

    public function course()
    {
        return $this->belongsTo(course::class, 'courseid');
    }
}

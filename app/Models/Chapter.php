<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class');
    }

    public function subject()
    {
        return $this->belongsTo(School_subject::class, 'subject');
    }
}

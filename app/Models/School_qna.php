<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_qna extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(School_subject::class, 'subject_id');
    }
}

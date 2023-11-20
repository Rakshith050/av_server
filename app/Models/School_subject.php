<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_subject extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->belongsTo(Classes::class, "class_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_message extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class, 'sender_id', 'id');
}
}

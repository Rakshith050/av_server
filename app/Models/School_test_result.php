<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_test_result extends Model
{
    use HasFactory;

    public function test()
    {
        return $this->belongsTo(School_test::class, 'test_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_items extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
}

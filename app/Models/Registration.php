<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'registration_type',
        'team_name',
        'full_name',
        'email',
        'event_name',
        'team_size',
        'pass_type',
        'members',
    ];

    protected $casts = [
        'members' => 'array',
    ];
}
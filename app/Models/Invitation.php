<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable =[
        'users_id',
        'rip_name',
        'rip_age',
        'rip_date',
        'rip_time',
        'rip_place',
        'burial_date',
        'burial_time',
        'burial_place',
        'burial_start_from',
        'abandoned_family',
    ];

    protected $hidden = [];
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'address',
        'address_latitude',
        'address_longitude',
        'check_in_time',
        'check_out_time_fulltime',
        'check_out_time_part_time',
        'minutes_late'
    ];
}

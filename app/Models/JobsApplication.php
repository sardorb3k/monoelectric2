<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsApplication extends Model
{
    use HasFactory;
    protected $table = 'jobsapplication';
    protected $fillable = [
        'tcidnumber',
        'firstname',
        'lastname',
        'birthdate',
        'gender',
        'married',
        'license',
        'email',
        'phone',
        'message',
        'file',
    ];
}

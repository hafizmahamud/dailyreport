<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'task_name',
        'project_name',
        'description',
        'time_spent',
        'status',
    ];
}

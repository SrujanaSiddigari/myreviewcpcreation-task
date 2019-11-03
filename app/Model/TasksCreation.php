<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TasksCreation extends Model
{
    //
    protected $table = 'created_tasks_table';
    protected $fillable = [
        'subject',
        'description',
        'task_creation_date',
        'priority'
    ];
}

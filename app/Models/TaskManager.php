<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'task_name',
        'task_date_and_time',
        'is_active',
        'assigned_to',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $table = 'task_managers';

    protected $casts = [ 
        'id' => 'integer', 
        'assigned_to' => 'integer',
        'user_id' => 'integer',
    ];
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function task_assigned_user(){
        return $this->belongsTo(User::class, 'assigned_to', 'id');
    }
}

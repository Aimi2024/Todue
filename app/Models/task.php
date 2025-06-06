<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{


    protected $fillable = [
        'task_name',
        'description',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function searchScope(Builder $query, string $search): Builder
    {
        return $query->where('task_name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%");
    }
}

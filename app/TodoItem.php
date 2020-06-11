<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable=[
        'title',
        'description'
    ];
    protected $table = 'todo_items';
}

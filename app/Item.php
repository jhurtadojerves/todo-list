<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'name', 'completed', 'todo_id'
    ];

    public function todo()
    {
        return $this->belongsTo('App\Todo');
    }

}

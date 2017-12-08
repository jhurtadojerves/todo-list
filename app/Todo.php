<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Todo extends Model
{
    protected $table = 'todos';

    protected $fillable = [
      'title', 'description', 'user_id'
    ];

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route('todos.show', [$this->id, $this->slug]);
    }


}

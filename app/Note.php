<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'object', 'comment', 'addingtime', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

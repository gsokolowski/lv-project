<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // only fillable field for user is Note body, If user will try to pass id of note that will not work
    protected $fillable = ['body', 'user_id'];


    public function card() {
        return $this->belongsTo(Card::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

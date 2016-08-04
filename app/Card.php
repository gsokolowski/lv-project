<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Card extends Model
{
    // A Card has many Notes setting up relations
    // fetch the notes for the card
    public function notes() {
        //return $this->hasMany('App\Note'); lub
        return $this->hasMany(Note::class);
    }

    public function addNote(Note $note) {
        // save note for card to db
        $this->notes()->save($note); // it saved at this point in db
    }

    public function addCard() {
        // save card to db
        $this->save(); // it is saved at this point in db
    }
}

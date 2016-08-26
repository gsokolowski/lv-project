<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card; // so get full object of card and pass it to store method as Card $card and you have all data from card for this card Id
use Illuminate\Http\Request;


class NotesController extends Controller
{
    public function store(Request $request, Card $card) {

        // add validation to store note on field body so it's required
        // if body field is not filled it will redirect request to the previous
        //  page which means it will take it we it was (add not page)
        $this->validate($request, [
           'body' => 'required|max:25'
        ]);

        $note = new Note($request->all());
        // if user is sign in
        //$note->user_id = Auth::id();
        $note->user_id = 1; // hardcoded

        $card->addNote($note);

        return back();
    }

    public function edit( Note $note) {

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note) {

        $note->update(
            $request->all()
        );
        return back();
    }
}

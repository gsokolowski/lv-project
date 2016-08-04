<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card; // so get full object of card and pass it to store method as Card $card and you have all data from card for this card Id
use Illuminate\Http\Request;


class NotesController extends Controller
{
    public function store(Request $request, Card $card) {

        $note = new Note($request->all());
        $note->user_id = 1;
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

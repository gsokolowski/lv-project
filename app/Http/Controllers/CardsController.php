<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    public function index() {

        //$cards = DB::table('cards')->get();
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    // if you dont have Card $card passed to controller action then you can get it like that
    public function show(Card $card) {

        // $card = Card::all(); // returns all cards

        // returns array of all cards and notes associated with the card
        // $card = Card::with('notes')->get(); // with('notes') comes from Model Card.php method notes()

        // returns array of card id=1 and all notes associated with the card
        // $card = Card::with('notes')->find(1);

        // returns array of card id=1 and all notes associated with the card and user associated to the note
        // $card = Card::with('notes.user')->find(1);

        // if you dont have Card $card passed to controller action then you can get it like that
        // $card->load('notes.user');

        // returns all Card objects
        // return $card;

        // but with load we get array of cards  and all notes associated with the cards and user associated to the notes
        // we get all we need - the whole tree
        $card->load('notes.user');

        // return $card;

        return view('cards.show', compact('card'));
    }

    public function store(Request $request) {

        $card = new Card();
        $card->title = $request->title; // add body text from request to $note object
        //$card->save(); // it saved at this point in db
        $card->addCard();
        return redirect('/cards');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{       

    public function create()
    {
        $ticket = Ticket::all();

        return view('ticket.index', compact('ticket'));
    }
   

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:255',
        ]);

        // Opslaan in de database
        Ticket::create($request->all());

        return redirect()->route('ticket.create')->with('success', 'Ticket is aangemaakt!');
    }


}

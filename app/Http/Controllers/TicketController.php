<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{

    public function create()
    {
        $tickets = Ticket::all();

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

    public function tickets()
    {
        // Haal alle tickets op
        $tickets = Ticket::all();

        // Stuur de tickets naar de view
        return view('admin.tickets', compact('tickets'));
    }

    public function edit($id)
    {
        // Haal het ticket op dat je wilt bewerken
        $ticket = Ticket::findOrFail($id);

        // Stuur het ticket naar de view
        return view('admin.tickets.edit', compact('ticket'));
    }
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('admin.tickets')->with('success', 'Ticket succesvol verwijderd!');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'beschrijving' => 'required|string',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        return redirect()->route('admin.tickets')->with('success', 'Ticket succesvol bijgewerkt!');
    }
}

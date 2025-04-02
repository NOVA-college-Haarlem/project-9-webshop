<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function checkout(
        Request $request
    ) {
        return view('checkout.index');
    }

    public function edit()
    {
        return view('checkout.edit');
    }


    public function store(
        Request $request
    ) {
        $request->validate([
            'naam' => 'required|string|max:255',
            'tussenvoegselnaam' => 'nullable|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoonnummer' => 'nullable|string|max:15',
            'land' => 'required|string|max:15',
            'postcode' => 'required|string|max:255',
            'huisnummer' => 'required|string|max:255',
            'straat' => 'required|string|max:255',
            'woonplaats' => 'required|string|max:255',
            'facatuursadress1' => 'required|string|max:255',
            'tussenvoegseladress' => 'nullable|string|max:255',
            'facatuursadress2' => 'nullable|string|max:255',
            'betaalmethode' => 'required|string|max:255',
        ]);

        // Opslaan in de database
        Checkout::create($request->all());

        return redirect()->route('checkout.index')->with('success', 'Checkout successful!');
    }
    public function index()
    {
        return view('checkout.index');
    }
}

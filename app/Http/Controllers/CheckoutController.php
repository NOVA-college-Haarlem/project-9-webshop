<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $shippingCost = $total < 50 ? 5.00 : 0.00;
        return view('checkout.index', compact('cart', 'total', 'shippingCost'));
    }

    // Verwerkt de checkout (betaling)
    public function process(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'payment_method' => 'required|string|in:creditcard,paypal,ideal',
        ]);

        // Hier de integratie met de gewenste betalingsgateway toevoegen.
        // Bijvoorbeeld: gebruik Stripe, PayPal, of Mollie. Hieronder een dummy-implementatie:

        // Dummy-check: stel dat de betaling altijd succesvol is.
        $paymentSuccess = true;

        if ($paymentSuccess) {
            // Leeg de winkelwagen na een succesvolle betaling.
            session()->forget('cart');

            return redirect()->route('welcome')->with('success', 'Betaling succesvol afgerond!');
        } else {
            return redirect()->back()->withErrors(['payment' => 'Betaling mislukt. Probeer het opnieuw.']);
        }
    }
}

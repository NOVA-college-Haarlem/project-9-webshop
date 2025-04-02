<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }
    public function store(Request $request)
{
    $productId = $request->input('product_id');
    $product = Product::findOrFail($productId);

    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            "name"     => $product->name,
            "price"    => $product->price,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('cart.index')->with('success', 'Product is toegevoegd aan de winkelwagen!');
}

    public function updateItem(Request $request, $id)
    {
        $cart = session()->get('cart');
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
     public function addToCart($id)
    {
        // Zoek het product op basis van het ID
        $product = Product::findOrFail($id);

        // Haal de huidige winkelwagen op (of maak een lege array als deze nog niet bestaat)
        $cart = session()->get('cart', []);

        // Als het product al in de winkelwagen zit, verhoog dan de hoeveelheid, anders voeg het toe
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name"     => $product->name,
                "price"    => $product->price,
                "quantity" => 1
            ];
        }

        // Sla de bijgewerkte winkelwagen op in de sessie
        session()->put('cart', $cart);

        // Geef een succesmelding en redirect terug naar de productindex of een andere pagina
        return redirect()->route('products.index')
            ->with('success', 'Product is toegevoegd aan de winkelwagen!');
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item is verwijderd!');
    }

    public function checkout()
    {
        // Hier kun je de checkout-logica implementeren of een view tonen
        return view('checkout.index'); // Zorg voor een view resources/views/checkout/index.blade.php
    }
}
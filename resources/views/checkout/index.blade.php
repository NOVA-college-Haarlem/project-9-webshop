<!-- filepath: c:\Users\Indy\Herd\project-9-webshop\resources\views\checkout\index.blade.php -->
<!DOCTYPE html>
<x-base-layout>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Checkout</h1>
        <form action="{{ route('checkout.store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light mx-auto" style="max-width: 600px;">
            @csrf
            <!-- Name -->
            <div class="mb-3">
                <label for="voornaam" class="form-label">Voornaam*</label>
                <input type="text" class="form-control" id="voornaam" name="naam" placeholder="Vul uw voornaam in" required>
            </div>

            <div class="mb-3">
                <label for="tussenvoegsel" class="form-label">Tussenvoegsel</label>
                <input type="text" class="form-control" id="tussenvoegsel" name="tussenvoegselnaam" placeholder="Vul uw tussenvoegsel in">
            </div>

            <div class="mb-3">
                <label for="achternaam" class="form-label">Achternaam*</label>
                <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Vul uw e-mail in" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="straat" class="form-label">Adres*</label>
                <input type="text" class="form-control" id="straat" name="straat" placeholder="Vul uw adres in" required>
            </div>

            <!-- City -->
            <div class="mb-3">
                <label for="stad" class="form-label">Stad*</label>
                <input type="text" class="form-control" id="stad" name="woonplaats" placeholder="Vul uw stad in" required>
            </div>

            <!-- Postal Code -->
            <div class="mb-3">
                <label for="post_code" class="form-label">Postcode*</label>
                <input type="text" class="form-control" id="post_code" name="postcode" placeholder="Vul uw postcode in" required>
            </div>

            <div class="mb-3">
                <label for="telefoonnummer" class="form-label">Telefoonnummer</label>
                <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" placeholder="Vul uw telefoonnummer in">
            </div>

            <div class="mb-3">
                <label for="land" class="form-label">Land*</label>
                <input type="text" class="form-control" id="land" name="land" placeholder="Vul uw land in" required>
            </div>

            <div class="mb-3">
                <label for="huisnummer" class="form-label">Huisnummer*</label>
                <input type="text" class="form-control" id="huisnummer" name="huisnummer" placeholder="Vul uw huisnummer in" required>
            </div>

            <div class="mb-3">
                <label for="facatuursadress1" class="form-label">Factuuradres 1*</label>
                <input type="text" class="form-control" id="facatuursadress1" name="facatuursadress1" placeholder="Vul uw factuuradres in" required>
            </div>

            <div class="mb-3">
                <label for="facatuursadress2" class="form-label">Factuuradres 2</label>
                <input type="text" class="form-control" id="facatuursadress2" name="facatuursadress2" placeholder="Vul uw factuuradres in">
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Betaalmethode</label>
                <select class="form-select" id="payment_method" name="betaalmethode" required>
                    <option value="" disabled selected>Selecteer een betaalmethode</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Aankoop Voltooien</button>
            </div>
        </form>
    </div>
</body>
</x-base-layout>
</html>
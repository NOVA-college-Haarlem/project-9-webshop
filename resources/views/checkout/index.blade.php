<!DOCTYPE html>
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
        <form action="{{ route('checkout.store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light">
            @csrf
            <!-- Name -->
            <div class="mb-3">
                <label for="voornaam" class="form-label">Voornaam*</label>
                <input type="text" class="form-control" id="voornaam" name="naam" placeholder="Vul uw achternaam in" required>
            </div>

            <div class="mb-3">
                <label for="tussenvoegsel" class="form-label">Tussenvoegsel</label>
                <input type="text" class="form-control" id="tussenvoegsel" name="tussenvoegselnaam" placeholder="Vul uw tussentoegsel in">
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
                <label for="straat" class="form-label">Adress*</label>
                <input type="text" class="form-control" id="straat" name="straat" placeholder="Vul uw adress in" required>
            </div>

            <!-- City -->
            <div class="mb-3">
                <label for="stad" class="form-label">Stad*</label>
                <input type="text" class="form-control" id="stad" name="woonplaats" placeholder="Vul uw stad in" required>
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <!-- Postal Code -->
            <div class="mb-3">
                <label for="post_code" class="form-label">Post Code*</label>
                <input type="text" class="form-control" id="post_code" name="postcode" placeholder="Vul uw post code in" required>
            </div>
            <div class="mb-3">
                <label for="telefoonnummer" class="form-label">Telefoonummer</label>
                <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" placeholder="Vul uw post telefoonnummer in" >
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
                <label for="facatuursadress1" class="form-label">Facatuursadress 1*</label>
                <input type="text" class="form-control" id="facatuursadress1" name="facatuursadress1" placeholder="Vul uw facatuursadress in" required>
            </div>
            <div class="mb-3">
                <label for="facatuursadress2" class="form-label">Facatuursadress 2</label>
                <input type="text" class="form-control" id="facatuursadress2" name="facatuursadress2" placeholder="Vul uw facatuursadress in">
            </div>
            <div class="mb-3">
                <label for="tussenvoegsel" class="form-label">Tussenvoegsel adress</label>
                <input type="text" class="form-control" id="facatuursadress2" name="tussenvoegseladress" placeholder="Vul uw tussenvoegsel in">
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method</label>
                <select class="form-select" id="payment_method" name="betaalmethode" required>
                    <option value="" disabled selected>Select a payment method</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Complete Purchase</button>
            </div>
        </form>
    </div>

    
</body>

</html>
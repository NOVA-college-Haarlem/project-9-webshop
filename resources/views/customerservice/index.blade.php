<!-- filepath: c:\Users\Indy\Herd\project-9-webshop\resources\views\customerservice\index.blade.php -->
<x-base-layout>
    <div class="container my-5">
        <h1 class="text-center mb-4">Klantenservice</h1>
        <p class="text-center">Welkom bij onze klantenservice. Hier vindt u antwoorden op veelgestelde vragen. Heeft u nog steeds hulp nodig? Klik op de knop hieronder om een ticket aan te maken.</p>

        <!-- FAQ Section -->
        <div class="faq-section my-4">
            <h2 class="mb-3">Veelgestelde Vragen</h2>
            <div class="faq-item mb-4">
                <h5 class="font-bold">Hoe kan ik mijn bestelling volgen?</h5>
                <p>U kunt uw bestelling volgen via de trackinglink die u per e-mail heeft ontvangen na het plaatsen van uw bestelling.</p>
            </div>
            <div class="faq-item mb-4">
                <h5 class="font-bold">Wat is het retourbeleid?</h5>
                <p>U kunt producten binnen 30 dagen na ontvangst retourneren, mits ze in originele staat verkeren. Neem contact op met onze klantenservice voor meer informatie.</p>
            </div>
            <div class="faq-item mb-4">
                <h5 class="font-bold">Hoe kan ik contact opnemen met de klantenservice?</h5>
                <p>U kunt contact met ons opnemen via het contactformulier op onze website of door te bellen naar onze klantenservice op 0800-123-4567.</p>
            </div>
        </div>

        <!-- Ticket Button -->
        <div class="text-center mt-5">
        <a href="/customerservice/ticket/create" class="custom-blue-btn">Ticket Aanmaken</a>
        </div>
    </div>
</x-base-layout>
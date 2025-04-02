<x-base-layout>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container my-5">
        <h1 class="text-center mb-4">Ticket Aanmaken</h1>
        <form action="{{ route('ticket.store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light mx-auto" style="max-width: 600px;">
            @csrf
            <!-- Naam -->
            <div class="mb-3">
                <label for="naam" class="form-label">Naam</label>
                <input type="text" class="form-control" id="naam" name="naam" placeholder="Vul uw naam in" required>
            </div>

            <!-- Beschrijving -->
            <div class="mb-3">
                <label for="beschrijving" class="form-label">Beschrijving</label>
                <textarea class="form-control" id="beschrijving" name="beschrijving" rows="2p" placeholder="Beschrijf uw probleem" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4 py-2">Ticket Aanmaken</button>
            </div>
        </form>
    </div>
</x-base-layout>
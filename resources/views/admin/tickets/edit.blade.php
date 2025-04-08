<x-base-layout>
<form action="{{ route('admin.tickets.update', $ticket->id) }}" method="POST" class="bg-white shadow-lg rounded-lg p-6">
    @csrf
    @method('PUT')

    <!-- Naam -->
    <div class="mb-4">
        <label for="naam" class="block text-gray-700 font-bold mb-2">Naam</label>
        <input type="text" id="naam" name="naam" value="{{ $ticket->naam }}" 
               class="w-full p-2 border rounded-lg" required>
    </div>

    <!-- Beschrijving -->
    <div class="mb-4">
        <label for="beschrijving" class="block text-gray-700 font-bold mb-2">Beschrijving</label>
        <textarea id="beschrijving" name="beschrijving" rows="4" 
                  class="w-full p-2 border rounded-lg" required>{{ $ticket->beschrijving }}</textarea>
    </div>

    <!-- Opslaan knop -->
    <div class="text-center">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-200 ease-in-out">
            Opslaan
        </button>
    </div>
</form>
</x-base-layout>
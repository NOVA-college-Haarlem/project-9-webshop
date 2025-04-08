<!-- filepath: c:\Users\Indy\Herd\project-9-webshop\resources\views\admin\tickets.blade.php -->
<x-base-layout>
    <div class="container my-5">
        <h1 class="text-center text-3xl font-bold mb-4">Alle Tickets</h1>

        <!-- Controleer of er tickets zijn -->
        @if ($tickets->isEmpty())
            <p class="text-center text-gray-600">Er zijn geen tickets beschikbaar.</p>
        @else
            <div class="bg-white shadow-lg rounded-lg p-6">
                <ul class="space-y-4">
                    @foreach ($tickets as $ticket)
                        <li class="p-4 bg-gray-100 rounded-lg shadow-md hover:bg-gray-200 transition duration-200 ease-in-out">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $ticket->naam }}</h2>
                            <p class="text-gray-600">{{ $ticket->beschrijving }}</p>
                            <p class="text-sm text-gray-500">Aangemaakt op: {{ $ticket->created_at->format('d-m-Y H:i') }}</p>
                            
                            <!-- Knop om ticket te bewerken -->
                            <div class="mt-4">
                                <a href="{{ route('admin.tickets.edit', $ticket->id) }}" 
                                   class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                                    Bewerken
                                </a>
                            </div>

                            <div>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                            Verwijder
                        </button>
                    </form>
                </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-base-layout>
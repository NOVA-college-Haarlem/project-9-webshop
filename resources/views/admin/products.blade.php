<x-base-layout>
    <div class="text-center mb-6">
        <!-- Centered Heading -->
        <h1 class="text-3xl font-bold text-gray-800">Alle Producten</h1>
    </div>

    <!-- Lijst van producten -->
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <ul class="space-y-4">
            @foreach ($products as $product)
            <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow-md hover:bg-gray-200 transition duration-200 ease-in-out">
                <!-- Product details -->
                <div>
                    <a href="{{ route('products.edit', $product->id) }}">
                        <p class="text-xl font-semibold text-gray-800">{{ $product->name }}</p>
                        <p class="text-sm text-gray-600">{{ $product->description }}</p>
                        <p class="text-sm text-gray-600">{{ $product->price }} EUR</p>
                        <p class="text-sm text-gray-600">{{ $product->stock }} in stock</p>
                        @foreach ($product->categories as $category)
                            <p class="text-sm text-gray-600">{{ $category->name }}</p>
                        @endforeach
                    </a>
                </div>
    
                <!-- Delete Button -->
                <div>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                            Verwijder
                        </button>
                    </form>
                </div>

                <div>
                    <form action="{{ route('products.edit', $product->id) }}" method="POST" onsubmit="return">
                        @csrf
                        @method('EDIT')
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                            Edit
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- Centered Create Product Button -->
        <div class="mt-6 flex justify-center">
            <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition duration-200 ease-in-out">
                Maak een nieuw product
            </a>
        </div>
    </div>    
</x-base-layout>


<x-base-layout>
    <div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-md mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Start -->
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Submit Your Review</h2>

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the title of your review">
            </div>

            <!-- Review Field -->
            <div class="mb-4">
                <label for="review" class="block text-gray-700 font-medium mb-2">Review</label>
                <textarea name="review" id="review" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write your review here"></textarea>
            </div>

            <!-- Rating System (Stars) -->
            <div class="mb-6">
                <label for="rating" class="block text-gray-700 font-medium mb-2">Product Rating</label>
                <div class="flex space-x-2 justify-center">
                    <input type="radio" id="star5" name="rating" value="5" class="hidden" />
                    <label for="star5" class="text-3xl cursor-pointer text-gray-400 hover:text-yellow-500">&#9733;</label>

                    <input type="radio" id="star4" name="rating" value="4" class="hidden" />
                    <label for="star4" class="text-3xl cursor-pointer text-gray-400 hover:text-yellow-500">&#9733;</label>

                    <input type="radio" id="star3" name="rating" value="3" class="hidden" />
                    <label for="star3" class="text-3xl cursor-pointer text-gray-400 hover:text-yellow-500">&#9733;</label>

                    <input type="radio" id="star2" name="rating" value="2" class="hidden" />
                    <label for="star2" class="text-3xl cursor-pointer text-gray-400 hover:text-yellow-500">&#9733;</label>

                    <input type="radio" id="star1" name="rating" value="1" class="hidden" />
                    <label for="star1" class="text-3xl cursor-pointer text-gray-400 hover:text-yellow-500">&#9733;</label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                    Beoordeling Opslaan
                </button>
            </div>
        </form>

    </div>

    <script>
        // Select all radio buttons
        const stars = document.querySelectorAll('input[name="rating"]');
        
        // Add event listeners to each radio button
        stars.forEach(star => {
            star.addEventListener('change', function() {
                // Log the selected rating for demonstration purposes
                const selectedRating = document.querySelector('input[name="rating"]:checked').value;
                console.log('Selected Rating: ' + selectedRating);
            });
        });
    </script>
</x-base-layout>

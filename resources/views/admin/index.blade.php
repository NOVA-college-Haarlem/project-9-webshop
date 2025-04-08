<!-- filepath: c:\Users\Indy\Herd\project-9-webshop\resources\views\admin\index.blade.php -->
<x-base-layout>
    <div class="d-flex justify-content-center align-items-center" style="height: 50; background-color: #f8f9fa;">
        <h1 class="text-center fw-bold" style="font-size: 3rem; color: #000;">Admin Dashboard</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 50; background-color: #f8f9fa;">
        <h1 class="text-center fw-bold" style="font-size: 1.5rem; color: #000;">Vind hieronder wat je nodig hebt:</h1>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <a href="{{ route('admin.products') }}" class="btn btn-primary btn-lg w-100">Producten</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('admin.categories') }}" class="btn btn-primary btn-lg w-100">Categorieën</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('admin.tickets') }}" class="btn btn-primary btn-lg w-100">Tickets</a>
            </div>
        </div>


</x-base-layout>
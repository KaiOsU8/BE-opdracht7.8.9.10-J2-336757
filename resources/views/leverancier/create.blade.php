<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-5">Create Delivery for {{ $product->Naam }}</h1>

        <form action="{{ route('leverancier.store', [$product->id, $leverancier->id, 'id' => $id]) }}" method="POST" class="text-center text-xl">
            @csrf

            <div class="form-group m-2">
                <label for="Aantal">Aantal</label>
                <input type="number" class="form-control" id="Aantal" name="Aantal" required>
            </div>

            <div class="form-group m-2">
                <label for="DatumEerstVolgendeLevering">Delivery Date</label>
                <input type="date" class="form-control" id="DatumEerstVolgendeLevering" name="DatumEerstVolgendeLevering" required>
            </div>

            <button type="submit" class="btn btn-primary m-2">Save</button>
        </form>
    </div>
</x-app-layout>
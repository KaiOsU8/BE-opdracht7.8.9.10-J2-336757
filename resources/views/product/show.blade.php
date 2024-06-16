<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
<div class=" flex justify-center flex-col items-center">
    <h1 class="text-center text-4xl m-20">Overzicht Allergenen</h1>
    <h1 class="text-center text-xl m-5">Naam: {{ $product->Naam }}</h1>
    <h1 class="text-center text-xl m-5">Barcode: {{ $product->Barcode }}</h1>
    <table class="text-center flex justify-center">
        <tr class="text-xl">
            <th class="border-solid border-2 border-sky-400">Allergeen Naam</th>
            <th class="border-solid border-2 border-sky-400">Allergeen Omschrijving</th>
        </tr>
        @foreach ($product->productPerAllergeen as $productPerAllergeen)
            <tr>
                <td class="border-solid border-2 border-sky-400">{{ $productPerAllergeen->allergeen->Naam }}</td>
                <td class="border-solid border-2 border-sky-400">{{ $productPerAllergeen->allergeen->Omschrijving }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('product.index') }}" class="mt-5 bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">Terug naar Producten</a>
</div>
</x-app-layout>